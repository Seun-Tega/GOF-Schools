@extends('layouts.admin')

@section('page-title')
    News and Events
@endsection

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal-2">Add
                    News<i class="fa fa-play-circle ml-1"></i></button>
            </div>
            <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel-2">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="title"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect3">Type</label>
                                    <select class="form-control" id="typeSelector" name="type">
                                        <option value="news">News</option>
                                        <option value="events">Events</option>
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
                                        <option value="nigeria">Nigeria</option>
                                        <option value="other">Other</option>
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
                                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="news_content">{{ old('news_content') }}</textarea>
                                </div>

                                <!-- Events-only fields -->
                                <div class="form-group event-field">
                                    <label for="eventDate">Event Date</label>
                                    <input type="date" class="form-control" id="eventDate" name="event_date"
                                        value="{{ old('event_date') }}">
                                    @error('event_date')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group event-field">
                                    <label for="eventTime">Event Time</label>
                                    <input type="time" class="form-control" id="eventTime" name='event_time'>
                                    @error('event_time')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group event-field">
                                    <label for="eventVenue">Event Venue</label>
                                    <input type="text" class="form-control" id="eventVenue" name="event_venue">
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
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image" name="photo">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary"
                                                type="button">Upload</button>
                                        </span>
                                    </div>
                                    @error('photo')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- Modal Ends -->
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

            // Run on modal show
            $('#exampleModal-2').on('shown.bs.modal', function() {
                toggleFields(); // default to whatever is selected (e.g. 'news')
            });

            // Run on dropdown change
            selector.addEventListener('change', toggleFields);
        });
    </script>
@endsection
