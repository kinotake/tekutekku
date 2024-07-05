<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ホーム画面</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
</head>

<body>
<header class="header">
    <a href="/" class="link">
        <img src="{{ asset('/img/logo.png') }}"  alt="てくてっくのロゴ"  class="logo"> 
    </a>
    <nav>
        <ul class="header_links">
            <li class="header_link_box"><a href="/header" class="header_link">ログイン</a></li>
            <li class="header_link_box"><a href="/header" class="header_link">会員登録</a></li>
            <li class="header_link_box"><a href="/header" class="header_link">予約確認</a></li>
            <li class="header_link_box"><a href="/header" class="header_link">ニュース</a></li>
            <li class="header_link_box"><a href="/header" class="header_link">マイページ</a></li>
            <a href="/header">
                <img src="{{ asset('/img/icon/bars-icon.png') }}"  alt="ハンバーガーメニューの線"  class="menu">
            </a>
        </ul>
    </nav>
</header>
<div class="eyecatch">
    <form action="/keyword" method = "POST" class="form">
    @csrf
        <input type="text" class="input_content" name="keyword" class="keyword" placeholder="目的地・施設名を入力してください">
        <button class="form_button" type="submit">検索</button>
    </form>
</div>
<main class="all_sarch_contents"> 
    <div class="detail_sarch_contents">
        <h2 class="header_middle">検索条件から探す</h2>
        <div class="date_all_contents">
            <div class="top_date_all_content">
                <div class="date_content">
                    <label class="check_in">チェックイン</label>
                    <input type="date" class="date_form">
                </div>
            </div>
            <div class="under_date_all_content">
                <div class="date_content">
                    <label class="check_out">チェックアウト</label>
                    <input type="date" class="date_form">
                </div>
            </div>
        </div>
        <div class="select_contents">
            <label class="select_content_label">利用人数</label>
            <select class="select_content">
                <option>1名</option>
                <option>2名</option>
                <option>3名</option>
            </select>
        </div>
        <div class="select_contents">
            <label class="select_content_label">目的</label>
            <select class="select_content">
                <option>旅行</option>
                <option>出張</option>
                <option>冒険</option>
            </select>
        </div>
        <div class="select_contents">
            <label class="select_content_label">エリア</label>
            <select class="select_content">
                <option>北海道</option>
                <option>東北</option>
                <option>関東</option>
                <option>東海</option>
                <option>中部</option>
                <option>近畿</option>
                <option>中国</option>
                <option>四国</option>
                <option>九州</option>
                <option>沖縄</option>
            </select>
        </div>
        <div class="accordion_contents">
            <details>
                <summary class="summary">
                    <div class="summary_inner">
                        <img src="{{ asset('/img/icon/arrow-icon.png') }}"  alt="オープンののアイコン"  class="open_icon">
                    </div>
                </summary>
                <div>
                    <p class="accordion_header">食事タイプ</p>
                    <input type="radio" name="radio" class="radio"/>
                    <label class="radio_label">夕朝食付き</label></br>
                    <input type="radio" name="radio" class="radio"/>
                    <label class="radio_label">朝食付き</label></br>
                    <input type="radio" name="radio" class="radio"/>
                    <label class="radio_label">夕食付き</label></br>
                    <input type="radio" name="radio" class="radio"/>
                    <label class="radio_label">素泊まり</label></br>
                </div>
                <div class="checkbox_contents">
                    <p class="accordion_header">部屋こだわり</p>
                    <label class="checkbox_label" for="no_smoking">
                        <input type="checkbox" id="no_smoking"><span class="text">禁煙</span>
                    </label><br>
                    <label class="checkbox_label" for="spa">
                        <input type="checkbox" id="spa"><span class="text">露天風呂付き</span>
                    </label><br>
                    <label class="checkbox_label" for="luxury">
                        <input type="checkbox" id="luxury"><span class="text">スイートルーム</span>
                    </label><br>
                    <label class="checkbox_label" for="view">
                        <input type="checkbox" id="view"><span class="text">景色が綺麗</span>
                    </label><br>
                </div>
            </details>
        </div>
        <form action="/result" method = "GET" class="form">
        @csrf
            <button class="detail_form_button">検索する</button>
        </form>
    </div>
    <div class="location_purpose_sarch_contents">
        <div class="location_sarch_contents">
            <h2 class="header_middle">地図から探す</h2>
            <div class="map_contents">
                <img src="{{ asset('/img/map.png') }}"  alt="マップ画像"  class="map_png">
                <div class="hokkaido">
                    <button onclick="location.href='/area'" class="area_button" >北海道</button>
                </div>
                <div class="touhoku">
                    <button onclick="location.href='/area'" class="area_button">東北</button>
                </div>
                <div class="kanto">
                    <button onclick="location.href='/area'" class="area_button">関東</button>
                </div>
                <div class="toukai">
                    <button onclick="location.href='/area'" class="area_button">東海</button>
                </div>
                <div class="hokuriku">
                    <button onclick="location.href='/area'" class="area_button">北陸</button>
                </div>
                <div class="kinki">
                    <button onclick="location.href='/area'" class="area_button">近畿</button>
                </div>
                <div class="tyuugoku">
                    <button onclick="location.href='/area'" class="area_button">中国</button>
                </div>
                <div class="shikoku">
                    <button onclick="location.href='/area'" class="area_button">四国</button>
                </div>
                <div class="kyuusyuu">
                    <button onclick="location.href='/area'" class="area_button">九州</button>
                </div>
                <div class="okinawa">
                    <button onclick="location.href='/area'" class="area_button">沖縄</button>
                </div>
            </div>
        </div>
        <div class="purpose_sarch_contents">
            <h2 class="header_middle">目的から探す</h2>
            <div class="card_contents">
                <a class="card_content" href="/purpose">
                    <img src="{{ asset('/img/icon/business-icon.jpg') }}"  alt="出張のアイコン" class="icon">
                    <p class="card_name">出張</p>
                </a>
                <a class="card_content" href="/purpose">
                    <img src="{{ asset('/img/icon/leisure-icon.jpg') }}"  alt="レジャーのアイコン" class="icon">
                    <p class="card_name">レジャー</p>
                </a>
                <a class="card_content" href="/purpose">
                    <img src="{{ asset('/img/icon/spa-icon.jpg') }}"  alt="温泉のアイコン" class="icon">
                    <p class="card_name">温泉</p>
                </a>
                <a class="card_content" href="/purpose">
                    <img src="{{ asset('/img/icon/coupon-icon.jpg') }}"  alt="クーポンのアイコン" class="icon">
                    <p class="card_name">クーポン</p>
                </a>
                <a class="card_content" href="/purpose">
                    <img src="{{ asset('/img/icon/luxury-hotel-icon.jpg') }}"  alt="高級宿のアイコン" class="icon">
                    <p class="card_name">高級宿</p>
                </a>
                <a class="card_content" href="/purpose">
                    <img src="{{ asset('/img/icon/cheap-hotel-icon.jpg') }}"  alt="格安宿のアイコン" class="icon">
                    <p class="card_name">格安宿</p>
                </a>
            </div>
        </div>
    </div>
</main>
<footer>
    <ul class="footer_lists">
        <div class="responsive_footer_list">
            <li class="footer_list"><a href="/header" class="footer_link">ヘルプ・お問い合わせ</a><li>
            <li class="footer_list"><a href="/header" class="footer_link">会員規約</a><li>
        </div>
        <div class="responsive_footer_list">
            <li class="footer_list"><a href="/header" class="footer_link">個人情報保護方針</a><li>
            <li class="footer_list"><a href="/header" class="footer_link">クッキー利用について</a><li>
        </div>
        <div class="responsive_footer_list">
            <li class="footer_list"><a href="/header" class="footer_link">会社情報</a><li>
            <li class="footer_list"><a href="/header" class="footer_link">プライバシーポリシー</a><li>
        </div>
    </ul>
</footer>
<a href="https://coachtech.site/" class="link">
    <small class="coachtech_logo_content"><p class="powered_by">Powered by</p><img src="{{ asset('/img/coachtech-logo.png') }}"  alt="coachtechのロゴ" class="coachtech_logo"></small>
</a>
</body>
</html>