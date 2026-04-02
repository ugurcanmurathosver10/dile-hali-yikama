<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ url('/hakkimizda') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/iletisim') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    @foreach($hizmetler as $hizmetAdi => $altHizmetler)
    <url>
        <loc>{{ route('hizmet.detay', \Illuminate\Support\Str::slug($hizmetAdi)) }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach

    @foreach($bolgeler as $bolge)
    <url>
        <loc>{{ route('bolge.detay', \Illuminate\Support\Str::slug($bolge)) }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach

</urlset>
