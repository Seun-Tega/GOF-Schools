@extends('layouts.admin')

@section('page-title')
News and Events
@endsection

@section('content')

<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit News and Events</h4>
        <form class="forms-sample" action="{{ route('news.update', ['newsEvent' =>  $newsEvent->id]) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf

          <div class="form-group">
            <label for="exampleInputUsername1">Title</label>
            <input type="text" class="form-control" id="exampleInputUsername1" name="title" value="{{ $newsEvent->title }}">
            @error('title')
            <span class="text-danger">
              {{ $message }}
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect3">Type</label>
            <select class="form-control" id="typeSelector" name="type">
              <option value="news" {{  $newsEvent->type === 'news' ? 'selected' : '' }}>News</option>
              <option value="events" {{ $newsEvent->type === 'events' ? 'selected' : '' }}>Events</option>
            </select>
            @error('type')
            <span class="text-danger">
              {{ $message }}
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect3">Location</label>
            <select class="form-control" id="exampleFormControlSelect3" name="location">
              <option value="nigeria" {{  $newsEvent->location === 'nigeria' ? 'selected' : '' }}>Nigeria</option>
              <option value="cote" {{  $newsEvent->location === 'cote' ? 'selected' : '' }}>Cote-d-ivoire</option>
            </select>
            @error('location')
            <span class="text-danger">
              {{ $message }}
            </span>
          
            @enderror
          </div>

          <!-- News-only fields -->
          <div class="form-group news-field">
            <label for="exampleTextarea1">News Content</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"
              name="news_content">{{ $newsEvent->news_content }}</textarea>
          </div>

          <!-- Events-only fields -->
          <div class="form-group event-field">
            <label for="eventDate">Event Date</label>
            <input type="date" class="form-control" id="eventDate" name="event_date" value="{{  $newsEvent->event_date }}">
            @error('event_date')
            <span class="text-danger">
              {{ $message }}
            </span>
            @enderror
          </div>

          <div class="form-group event-field">
            <label for="eventTime">Event Time</label>
            <input type="time" class="form-control" id="eventTime" name='event_time' value="{{  $newsEvent->event_time }}">
            @error('event_time')
            <span class="text-danger">
              {{ $message }}
            </span>
            @enderror
          </div>

          <div class="form-group event-field">
            <label for="eventVenue">Event Venue</label>
            <input type="text" class="form-control" id="eventVenue" name="event_venue" value="{{  $newsEvent->event_venue }}">
            @error('event_venue')
            <span class="text-danger">
              {{ $message }}
            </span>
            @enderror
          </div>

          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="photo" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image" name="photo">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
            @error('photo')
            <span class="text-danger">
              {{ $message }}
            </span>
            @enderror
          </div>


          <button type="submit" class="btn btn-primary">Update</button>



        </form>


      </div>
    </div>

  </div>
</div>




<script>
  function toggleFields() {
            const type = document.getElementById('typeSelector').value;

            const newsFields = document.querySelectorAll('.news-field');
            const eventFields = document.querySelectorAll('.event-field');

            if (type === 'news') {
                newsFields.forEach(el => el.style.display = 'block');
                eventFields.forEach(el => el.style.display = 'none');
            } else if (type === 'events') {
                newsFields.forEach(el => el.style.display = 'none');
                eventFields.forEach(el => el.style.display = 'block');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const selector = document.getElementById('typeSelector');

            toggleFields();

            // Run on dropdown change
            selector.addEventListener('change', toggleFields);
        });
</script>
@endsection