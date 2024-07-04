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
    <div>
        <img src="{{ asset('/img/logo.png') }}"  alt="てくてっくのロゴ"  class="logo"> 
    </div>
    <nav>
        <ul class="header_links">
            <li class="header_link_box"><a href="" class="header_link">ログイン</a></li>
            <li class="header_link_box"><a href="" class="header_link">会員登録</a></li>
            <li class="header_link_box"><a href="" class="header_link">予約確認</a></li>
            <li class="header_link_box"><a href="" class="header_link">ニュース</a></li>
            <li class="header_link_box"><a href="" class="header_link">マイページ</a></li>
        </ul>
    </nav>
</header>
<div class="eyecatch">
    <img src="{{ asset('/img/eyecatch__pc.jpg') }}"  alt="アイキャッチ"  class="eyecatch_png">
    <div class="form_contents">
        <input type="text" class="input_content" placeholder="目的地・施設名を入力してください">
        <button class="form_button" type="submit">検索</button>
    </div>
</div>
<main class="all_sarch_contents"> 
    <div class="detail_sarch_contents">
        <h2>検索条件から探す</h2>
        <div class="date_all_contents">
            <div class="top_date_all_content">
                <div class="date_left_content">
                    <img src="{{ asset('/img/icon/calendar-icon.png') }}"  alt="カレンダーのアイコン"  class="calendar_png">
                </div>
                <div class="date_right_content">
                    <label class="check_in">チェックイン</label>
                    <input type="date">
                </div>
            </div>
            <div class="under_date_all_content">
                <div class="date_left_content">
                    <img src="{{ asset('/img/icon/calendar-icon.png') }}"  alt="カレンダーのアイコン"  class="calendar_png">
                </div>
                <div class="date_right_content">
                    <label class="check_out">チェックアウト</label>
                    <input type="date">
                </div>
            </div>
        </div>
        <div class="select_content">
            <label class="select_content_label">利用人数</label>
            <select class="select_content">
                <option>1名</option>
                <option>2名</option>
                <option>3名</option>
            </select>
        </div>
        <div class="select_content">
            <label class="select_content_label">目的</label>
            <select class="select_content">
                <option>旅行</option>
                <option>出張</option>
                <option>冒険</option>
            </select>
        </div>
        <div class="select_content">
            <label class="select_content_label">エリア</label>
            <select class="select_content">
                <option>北海道</option>
                <option>東北</option>
                <option>関東</option>
                <option>中部</option>
                <option>近畿</option>
                <option>中国</option>
                <option>四国</option>
                <option>九州</option>
            </select>
        </div>
        <div class="accordion_contents">
            <details>
                <summary class="summary">
                    <span class="summary_inner">
                    こだわり条件<span class="icon"></span>
                    </span>
                </summary>
                <div>
                    <p>食事タイプ</p>
                    <input type="radio" name="radio" class="radio" style="transform:scale(1.5)";/>
                    <label>夕朝食付き</label></br>
                    <input type="radio" name="radio" class="radio" style="transform:scale(1.5);"/>
                    <label>朝食付き</label></br>
                    <input type="radio" name="radio" class="radio" style="transform:scale(1.5);"/>
                    <label>夕食付き</label></br>
                    <input type="radio" name="radio" class="radio" style="transform:scale(1.5);"/>
                    <label>素泊まり</label></br>
                </div>
                <div>
                    <p>部屋こだわり</p>
                    <input type="checkbox" name="checkbox"/>
                    <label>禁煙</label></br>
                    <input type="checkbox" name="checkbox"/>
                    <label>露天風呂付き</label></br>
                    <input type="checkbox" name="checkbox"/>
                    <label>スイートルーム</label></br>
                    <input type="checkbox" name="checkbox"/>
                    <label>景色が綺麗</label></br>
                </div>
            </details>
        </div>
        <button class="detail_form_button">検索する</button>
    </div>
    <div class="location_purpose_sarch_contents">
        <div class="location_sarch_contents">
            <h2>地図から探す</h2>
            <div class="map">
                <img src="{{ asset('/img/map.png') }}"  alt="マップ画像"  class="map_png">
            </div>
        </div>
        <div class="purpose_sarch_contents">
            <h2>目的から探す</h2>
            <div class="card_contents">
                <div class="card_content">
                    <img src="{{ asset('/img/icon/business-icon.jpg') }}"  alt="出張のアイコン" class="icon">
                    <p class="card_name">出張</p>
                </div>
                <div class="card_content">
                    <img src="{{ asset('/img/icon/leisure-icon.jpg') }}"  alt="レジャーのアイコン" class="icon">
                    <p class="card_name">レジャー</p>
                </div>
                <div class="card_content">
                    <img src="{{ asset('/img/icon/spa-icon.jpg') }}"  alt="温泉のアイコン" class="icon">
                    <p class="card_name">温泉</p>
                </div>
                <div class="card_content">
                    <img src="{{ asset('/img/icon/coupon-icon.jpg') }}"  alt="クーポンのアイコン" class="icon">
                    <p class="card_name">クーポン</p>
                </div>
                <div class="card_content">
                    <img src="{{ asset('/img/icon/luxury-hotel-icon.jpg') }}"  alt="高級宿のアイコン" class="icon">
                    <p class="card_name">高級宿</p>
                </div>
                <div class="card_content">
                    <img src="{{ asset('/img/icon/cheap-hotel-icon.jpg') }}"  alt="格安宿のアイコン" class="icon">
                    <p class="card_name">格安宿</p>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <ul class="footer_lists">
        <li class="footer_list"><a herf="" class="link">ヘルプ・お問い合わせ</a><li>
        <li class="footer_list"><a herf="" class="link">会員規約</a><li>
        <li class="footer_list"><a herf="" class="link">個人情報保護方針</a><li>
        <li class="footer_list"><a herf="" class="link">クッキー利用について</a><li>
        <li class="footer_list"><a herf="" class="link">会社情報</a><li>
        <li class="footer_list"><a herf="" class="link">プライバシーポリシー</a><li>
    </ul>
</footer>
<small class="coachtech_logo_content">Powered by <img src="{{ asset('/img/coachtech-logo.png') }}"  alt="coachtechのロゴ" class="coachtech_logo"></small>
</body>
</html>