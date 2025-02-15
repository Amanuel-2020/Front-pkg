<div class="col">
    <a href="{{$courseItem->path()}}">
        <div class="course-status">
            @lang($courseItem->status)
        </div>
        @if($courseItem->getDiscountPercent())
            <div class="discountBadge">
                <p>{{$courseItem->getDiscountPercent()}}%</p>
                Discount
            </div>
        @endif
        <div class="card-img"><img src="{{$courseItem->banner->thumb}}" alt="{{$courseItem->title}}"></div>
        <div class="card-title"><h2>{{$courseItem->title}}</h2></div>
        <div class="card-body" style="display: flex; flex-direction: row; align-items: center;">
            <div style="margin-left: auto; display: flex; flex-direction: row; align-items: center;">
                <img src="{{$courseItem->teacher->thumb}}" alt="{{$courseItem->teacher->name}}">
                <span>{{$courseItem->teacher->name}}</span>
            </div>
            <span style="margin-right: auto;">Category: {{$courseItem->category->title ?? '-'}}</span>
        </div>
        <div class="card-details">
            <div class="time">{{$courseItem->formattedDuration()}}</div>
            <div class="price">
                @if($courseItem->getDiscountPercent())
                    <div class="discountPrice">{{$courseItem->getFormattedPrice()}}</div>
                @endif
                <div class="endPrice">{{$courseItem->getFormattedFinalPrice()}}</div>
            </div>
        </div>
    </a>
</div>
