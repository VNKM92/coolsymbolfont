<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:media="http://search.yahoo.com/mrss/">
	<channel>
        <title>Cool Symbols Copy And Paste</title>
		<link><![CDATA[{{ url('/') }}]]></link>
		<description>Cool Symbols Copy And Paste</description>
		<language>en</language>
		<pubDate>{{ \Carbon\Carbon::now()->toRssString() }}</pubDate>
		<generator>coolsymbol.online</generator>
        
        @foreach ($posts as $post)
            @php
            
                //dd($post);
                $imag ="";
                if(!empty($post->image)){
                    $imag = url('public/backend/movie/blog').'/'.$post->image ;
                }else {
                    $imag = $post->urlPoster ;
                }
                                                       
            @endphp
		<item>
			<guid>{{ url('/'.$post->slug) }}</guid>
			<title>{{ $post->title.' '. $post->created_at->year .''.'  Cool Symbols Copy And Paste'.' - '.'coolsymbol.online' }}</title>
			<link>{{ url('/'.$post->slug) }}</link>
			<author>help@Coolsymbol.online (coolsymbol)</author>
			<category>Blog</category>
			<description>{{ htmlspecialchars(strip_tags($post->metadiscription)) }}</description>
			<content:encoded><![CDATA[{{ htmlspecialchars(strip_tags($post->metadiscription)) }}]]></content:encoded>
			<pubDate>{{ $post->created_at->toRssString() }}</pubDate>
			<enclosure url="{{ $imag }}" type="image/jpeg" /> <!-- Add enclosure for image -->
		</item>
		@endforeach
	</channel>
</rss>