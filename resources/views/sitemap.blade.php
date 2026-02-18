<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    
        <?php 
            $data = App\Models\Post::where('publish', '1')->latest()->get();
            $blog = App\Models\Blog::latest()->get();
            $page = App\Models\Page::latest()->get();
            //dd($data);echo(rand(10,55));
        ?>
        <url>
            <loc>https://coolsymbol.online/</loc>
            <lastmod>2025-06-30T04:40:42+00:00</lastmod>
            <priority>1.00</priority>
        </url>
    
    @foreach ($data as $key => $item)
        <url>
            <loc>{{ url('/') }}/{{$item->slug}}</loc>
            <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($blog as $key => $item)
        <url>
            <loc>{{ url('/blog') }}/{{$item->slug}}</loc>
            <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($page as $key => $item)
        <url>
            <loc>{{ url('/page') }}/{{$item->slug}}</loc>
            <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    
</urlset>

    