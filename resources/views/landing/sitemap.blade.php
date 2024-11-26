<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ $posts[0]->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('/') }}/blog/{{ $post->permalink }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($products as $p)
        <url>
            <loc>{{ url('/') }}/product/{{ $p->permalink }}</loc>
            <lastmod>{{ $p->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>