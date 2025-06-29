<?php

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        return \App\Models\Setting::where('key', $key)->value('value') ?? $default;
    }
}

if (!function_exists('categoriesWithServices')) {
    function categoriesWithServices()
    {
        return \App\Models\Category::has('services')->with('services')->get();
    }
}


if (!function_exists('services')) {
    function services()
    {
        return \App\Models\Service::with(['category'])->oldest()->get();
    }
}

if (!function_exists('categories')) {
    function categories()
    {
        return \App\Models\Category::latest()->get();
    }
}

if (!function_exists('stores')) {
    function stores()
    {
        return \App\Models\OnlineStore::latest()->get();
    }
}

if (!function_exists('industries')) {
    function industries()
    {
        return \App\Models\Industry::get();
    }
}

if (!function_exists('render_editorjs')) {
    function render_editorjs($content)
    {
        if (is_string($content)) $content = json_decode($content, true);
        if (empty($content['blocks'])) return '';

        $html = '';
        foreach ($content['blocks'] as $block) {
            switch ($block['type']) {
                case 'header':
                    $level = $block['data']['level'] ?? 2;
                    $html .= "<h{$level}>{$block['data']['text']}</h{$level}>";
                    break;
                case 'paragraph':
                    $html .= "<p>{$block['data']['text']}</p>";
                    break;
                case 'list':
                    $tag = $block['data']['style'] === 'ordered' ? 'ol' : 'ul';
                    $html .= "<{$tag}>";
                    foreach ($block['data']['items'] as $item) {
                        $html .= "<li>$item</li>";
                    }
                    $html .= "</{$tag}>";
                    break;
                case 'image':
                    $url = $block['data']['file']['url'] ?? '';
                    $caption = $block['data']['caption'] ?? '';
                    $html .= "<figure><img src=\"$url\" alt=\"$caption\" class=\"img-fluid\"/>";
                    if ($caption) $html .= "<figcaption>$caption</figcaption>";
                    $html .= "</figure>";
                    break;
                case 'quote':
                    $html .= "<blockquote><p>{$block['data']['text']}</p><footer>{$block['data']['caption']}</footer></blockquote>";
                    break;
                case 'table':
                    $html .= "<table class=\"table\">";
                    foreach ($block['data']['content'] as $row) {
                        $html .= "<tr>";
                        foreach ($row as $cell) {
                            $html .= "<td>$cell</td>";
                        }
                        $html .= "</tr>";
                    }
                    $html .= "</table>";
                    break;
                case 'embed':
                    $service = $block['data']['service'] ?? '';
                    $embed = $block['data']['embed'] ?? '';
                    $caption = $block['data']['caption'] ?? '';
                    $html .= "<div class=\"embed-responsive embed-responsive-16by9\"><iframe src=\"$embed\" allowfullscreen></iframe></div>";
                    if ($caption) $html .= "<div class=\"embed-caption\">$caption</div>";
                    break;
                // Add more cases as you need: checklist, marker, link, etc
                default:
                    // fallback for unhandled blocks
                    $html .= "<div class='editor-block'>{$block['type']}</div>";
            }
        }
        return $html;
    }
}

