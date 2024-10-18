@extends('Front::layout.master')

@section('title', ' - All Courses')
@section('content')
    <main id="index">
        <article class="container article">
            <div class="ads">
                <a href="" rel="nofollow noopener"><img src="img/ads/1440px/test.jpg" alt=""></a>
            </div>
            <article class="category-h">
                <div class="h-t">
                    <h1 class="title">All Courses</h1>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="/" title="Home">Home</a></li>
                            <li><a href="{{route('allCourses')}}" title="All Courses">All Courses</a></li>
                        </ul>
                    </div>
                </div>
            </article>
            <div class="posts">
                @forelse($courses as $courseItem)
                    @include('Front::layout.singleCourseBox')
                @empty
                    <p>No courses found!</p>
                @endforelse
            </div>

            <div class="pagination">
                {{--{{$courses->render()}}--}}
            </div>
            {{$courses->render()}}
        </article>
    </main>
@endsection
