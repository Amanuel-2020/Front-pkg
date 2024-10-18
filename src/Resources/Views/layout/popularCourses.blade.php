<div class="box-filter">
    <div class="b-head">
        <h2>Most Popular Courses</h2>
        <a href="{{ route('allCourses') }}">View All</a>
    </div>
    <div class="posts">
        @foreach($popularCourses as $courseItem)
            @include('Front::layout.singleCourseBox')
        @endforeach
    </div>
</div>
