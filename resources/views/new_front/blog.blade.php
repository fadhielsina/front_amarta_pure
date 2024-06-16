@extends('new_front.layouts.app')
@section('content')

<div class="eltdf-grid-row" style="margin-top: 50px;">
    <div class="eltdf-page-content-holder eltdf-grid-col-12">
        <div class="eltdf-row-grid-section-wrapper ">
            <div class="eltdf-row-grid-section">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="eltdf-blog-list-holder eltdf-grid-list eltdf-bl-standard eltdf-three-columns eltdf-disable-bottom-space eltdf-normal-space eltdf-bl-pag-no-pagination" data-type=standard data-number-of-posts=6 data-number-of-columns=three data-space-between-items=normal data-orderby=name data-order=ASC data-image-size=full data-title-tag=h5 data-excerpt-length=19 data-post-info-section=yes data-post-info-image=yes data-post-info-author=yes data-post-info-date=yes data-post-info-category=yes data-post-info-comments=no data-post-info-like=no data-post-info-share=no data-pagination-type=no-pagination data-max-num-pages=2 data-next-page=2>
                                    <div class="eltdf-bl-wrapper eltdf-outer-space">
                                        <ul class="eltdf-blog-list">
                                            @foreach ($data as $item)
                                            <li class="eltdf-bl-item eltdf-item-space">
                                                <div class="eltdf-bli-inner">
                                                    <div class="eltdf-post-image">
                                                        <a itemprop="url" href="#" title="Blog">
                                                            <img width="1300" height="751" src="{{url('https://amartawater.com/storage')}}/{{$item->image}}" class="attachment-full size-full wp-post-image" alt="d" sizes="(max-width: 1300px) 100vw, 1300px" /> </a>
                                                    </div>
                                                    <div class="eltdf-bli-content">
                                                        <div class="eltdf-bli-info-top">
                                                            <div itemprop="dateCreated" class="eltdf-post-info-date entry-date published updated">
                                                                <a itemprop="url" href="#">
                                                                    {{$item->date}} </a>
                                                                <meta itemprop="interactionCount" content="UserComments: 0" />
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="8.328px" height="8.453px" viewBox="0 0 8.328 8.453" enable-background="new 0 0 8.328 8.453" xml:space="preserve">
                                                                    <polyline fill="none" stroke="currentColor" stroke-miterlimit="10" points="0.449,0.36 3.587,4.234 0.449,8.109 " />
                                                                    <polyline fill="none" stroke="currentColor" stroke-miterlimit="10" points="4.514,0.36 7.652,4.234 4.514,8.109 " />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <h5 itemprop="name" class="entry-title eltdf-post-title">
                                                            <a itemprop="url" href="#" title="Blog">
                                                                {{$item->title}} </a>
                                                        </h5>
                                                        <div class="eltdf-bli-excerpt">
                                                            <div class="eltdf-post-excerpt-holder">
                                                                <p itemprop="description" class="eltdf-post-excerpt">
                                                                    <?= nl2br($item->description) ?>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="eltdf-bli-info-bottom">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection