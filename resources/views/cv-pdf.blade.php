<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $name }} - CV</title>
    <style>
        @page { margin: 0.5in 0.6in; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Helvetica, Arial, sans-serif; font-size: 10.5pt; color: #2c3e50; line-height: 1.5; }
        .header { border-bottom: 3px solid #4f46e5; padding-bottom: 10px; margin-bottom: 15px; }
        .name { font-size: 24pt; font-weight: bold; color: #1a2332; }
        .title { font-size: 12pt; color: #4f46e5; font-weight: 600; margin-top: 2px; }
        .contact { margin-top: 6px; font-size: 9pt; color: #555; }
        .contact span { margin-right: 10px; }
        .contact a { color: #4f46e5; text-decoration: none; }
        h2.section { font-size: 11pt; color: #1a2332; text-transform: uppercase; letter-spacing: 1px; border-bottom: 1.5px solid #4f46e5; padding-bottom: 3px; margin-top: 14px; margin-bottom: 8px; }
        .summary { text-align: justify; font-size: 10pt; color: #444; }
        .item { margin-bottom: 10px; }
        .item-title { font-weight: bold; font-size: 10.5pt; color: #1a2332; }
        .item-sub { font-style: italic; color: #4f46e5; font-size: 9.5pt; }
        .item-date { float: right; color: #777; font-size: 9pt; }
        .item-desc ul { padding-left: 16px; margin-top: 3px; }
        .item-desc li { margin-bottom: 2px; font-size: 9.5pt; color: #444; }
        .skill-row { margin-bottom: 5px; font-size: 9.5pt; }
        .skill-label { font-weight: bold; color: #1a2332; display: inline-block; min-width: 80px; }
        .tag { display: inline-block; background: #eef2ff; color: #4f46e5; padding: 1px 7px; border-radius: 3px; font-size: 8.5pt; margin: 1px 2px; }
        .link { color: #4f46e5; font-size: 8.5pt; text-decoration: none; margin-right: 8px; }
        .clear { clear: both; }
    </style>
</head>
<body>

    <div class="header">
        <div class="name">{{ strtoupper($name) }}</div>
        <div class="title">{{ $title }} — {{ $subtitle }}</div>
        <div class="contact">
            <span>{{ $email }}</span>
            <span>{{ $phone }}</span>
            <span>{{ $location }}</span><br>
            <span><a href="{{ $githubUrl }}">{{ $github }}</a></span>
            <span><a href="{{ $websiteUrl }}">{{ $website }}</a></span>
        </div>
    </div>

    <h2 class="section">Professional Summary</h2>
    <p class="summary">{{ $summary }}</p>

    <h2 class="section">Technical Skills</h2>
    @foreach($skills as $category => $items)
        <div class="skill-row">
            <span class="skill-label">{{ $category }}:</span>
            @foreach($items as $s) <span class="tag">{{ $s }}</span> @endforeach
        </div>
    @endforeach

    <h2 class="section">Featured Projects (All Live)</h2>
    @foreach($projects as $p)
        <div class="item">
            <span class="item-title">{{ $p['title'] }}</span>
            <span class="item-date">{{ $p['date'] }}</span>
            <div class="clear"></div>
            <span class="item-sub">{{ $p['stack'] }}</span>
            <div class="item-desc">
                <ul>
                    @foreach($p['points'] as $point) <li>{{ $point }}</li> @endforeach
                    <li>
                        @foreach($p['links'] as $link) <a class="link" href="{{ $link['url'] }}">{{ $link['label'] }}</a> @endforeach
                    </li>
                </ul>
            </div>
        </div>
    @endforeach

    <h2 class="section">Professional Experience</h2>
    @foreach($experience as $exp)
        <div class="item">
            <span class="item-title">{{ $exp['role'] }}</span>
            <span class="item-date">{{ $exp['date'] }}</span>
            <div class="clear"></div>
            <span class="item-sub">{{ $exp['company'] }}</span>
            <div class="item-desc">
                <ul>
                    @foreach($exp['points'] as $point) <li>{{ $point }}</li> @endforeach
                </ul>
            </div>
        </div>
    @endforeach

    <h2 class="section">Education</h2>
    @foreach($education as $edu)
        <div class="item">
            <span class="item-title">{{ $edu['degree'] }}</span>
            <span class="item-date">{{ $edu['date'] }}</span>
            <div class="clear"></div>
            <span class="item-sub">{{ $edu['school'] }}</span>
        </div>
    @endforeach

    <h2 class="section">Languages</h2>
    @foreach($languages as $lang) <span class="tag">{{ $lang }}</span> @endforeach

</body>
</html>
