document.addEventListener("DOMContentLoaded", () => {
    let currentPage = 1;
    let lastPage = 1;
    let currentCallback = getNewsAndEvents;
    let currentType = null;


    console.log(currentType);

    async function getNewsAndEvents(page = 1) {
        try {
            const response = await axios.get(`/news/all?page=${page}`);
            return response.data;
        } catch (error) {
            console.error(error);
        }
    }

    async function filterNewsAndEvents(page = 1) {
        try {
            const response = await axios.get(`/news/filter/${currentType}?page=${page}`);
            return response.data;
        } catch (error) {
            console.error(error);
        }
    }

    function genrateViews() {
        return Math.floor(Math.random() * 200) + 1;
    }

    async function displayCard(page = 1, callback = currentCallback) {
        const data = await callback(page);
        const newsEvents = data.newsEvent?.data || data.newsEvents?.data || [];

        currentPage = data.newsEvent?.current_page || data.newsEvents?.current_page;
        lastPage = data.newsEvent?.last_page || data.newsEvents?.last_page;

        showCard(newsEvents, currentPage, lastPage);
    }

    function showCard(newsEvents, currentPage, lastPage) {

        console.log(newsEvents);
        let content = "";

        newsEvents.forEach((newsEvent) => {
            const views = genrateViews();
            content += `
              <div class="col" data-aos="fade-up">
                <div class="card h-100">
                  <img src="uploads/${newsEvent.photo}" class="card-img-top" alt="${newsEvent.title}">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title">${newsEvent.title}</h5>
                    <p class="card-text">${newsEvent.news_content}</p>
                    <div class="mt-auto d-flex align-items-center">
                      <a href="/news/${newsEvent.slug}" class="btn btn-dark enroll me-3 p-1">
                        Read Now <span><i class="bi bi-arrow-right"></i></span>
                      </a>
                      <div class="d-flex align-items-center">
                        <span class="me-3 admin">Admin</span>
                        <i class="bi bi-eye me-1"></i>
                        <span>${views}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>`;
        });

        document.querySelector(".card-wrapper").innerHTML = content;
        document.querySelector(".pagination-info").textContent = `${currentPage}/${lastPage}`;
    }

    // Pagination buttons
    document.querySelector(".button-class").addEventListener("click", (el) => {
        if (currentPage > 1) {
            displayCard(currentPage - 1);    
        }
    });

    document.querySelector(".button-class2").addEventListener("click", () => {
        if (currentPage < lastPage) {
            displayCard(currentPage + 1);
        }
    });



    // Filter buttons
    document.querySelectorAll(".filter").forEach((filter) => {
        filter.addEventListener("click", (e) => {
            e.preventDefault();

            document.querySelectorAll(".filter")
                .forEach((btn) => btn.classList.remove("filtered"));
            filter.classList.add("filtered");

            currentType = filter.dataset.type;
            
            console.log(currentType);

            currentCallback = filterNewsAndEvents;

            displayCard(1, currentCallback);
        });
    });

    // Initial load
    displayCard();
    
});
