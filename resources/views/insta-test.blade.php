<div id="blade-smp-insta" data-nanogallery2='{
        "thumbnailWidth": "auto",
        "thumbnailHoverEffect2": "descriptionSlideUp",
        "thumbnailHeight": "350",
        "thumbnailBorderVertical": 0,
        "thumbnailBorderHorizontal": 0,
        "colorScheme": {
          "thumbnail": {
            "borderColor": "rgba(24,37,144,1)"
          }
        },
        "thumbnailLabel": {
          "position": "overImageOnBottom",
          "display": false
        },
        "thumbnailHoverEffect2": "imageScaleIn80",
        "thumbnailAlignment": "left",
        "thumbnailGutterWidth": 10,
        "thumbnailGutterHeight": 10,
        "displayBreadcrumb": true,
        "breadcrumbAutoHideTopLevel": true,
        "breadcrumbOnlyCurrentLevel": false,
	"navigationBreadcrumb": {
	   "background": "#FF0000",
	   "color": "#FF0000"
	},
        "thumbnailOpenImage": true
      }'>


@foreach($instagram as $post)
	@if($post->type == "video")
		<!-- video -->
	@elseif($post->type == "carousel")
		<!-- carousel -->
	@else
		<a href="{{ $post->url }}" data-ngthumb="{{ $post->thumbnail_url }}" data-ngdesc="lol {{ $post->caption }}">Sigh: {{ $post->caption }}</a>
	@endif
@endforeach


	
