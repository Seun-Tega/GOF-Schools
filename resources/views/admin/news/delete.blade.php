<form action="{{ route('news.destroy', ['newsEvent' => $newsEvent->id]) }}" method="POST">
  @method('DELETE')
  @csrf
  <div class="modal fade" id="deleteModal{{ $newsEvent->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-2">Delete news/events</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this News/Event
            <span class="text-danger">  {{ strtoupper($newsEvent->title) }}</span>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>

        </div>
      </div>
    </div>
</form>