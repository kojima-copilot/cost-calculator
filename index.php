<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimate Calculator</title>
</head>

<style>
    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        line-height: 1.6;
        background-color: #f9f9f9;
        color: #333;
        padding: 20px;
    }

    /* Page Layout */
    h1,
    h2 {
        margin-bottom: 10px;
        color: #333;
    }

    h1 {
        font-size: 2em;
    }

    h2 {
        font-size: 1.5em;
        margin-top: 20px;
    }

    article {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 0 auto;
    }

    p {
        margin-bottom: 15px;
        font-size: 0.95em;
    }

    /* Fixed Price Box */
    #fixedBox {
        position: fixed;
        top: 20px;
        right: 20px;
        background: #ffcc00;
        padding: 10px 20px;
        font-size: 1.2em;
        border-radius: 5px;
        color: #333;
        font-weight: bold;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .fixed {
        position: fixed;
        top: 20px;
        right: 20px;
    }

    /* Form Layout */
    form {
        margin-top: 20px;
    }

    dl {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 15px 20px;
        align-items: center;
    }

    dt {
        font-weight: bold;
    }

    dd {
        margin-bottom: 15px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="url"],
    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 0.9em;
    }

    textarea {
        min-height: 80px;
        resize: vertical;
    }

    input[type="submit"] {
        background-color: #28a745;
        color: #fff;
        padding: 10px 20px;
        font-size: 1em;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: inline-block;
        margin-top: 15px;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Tooltips */
    .tooltip {
        position: relative;
    }

    .tooltip i {
        color: #888;
        font-size: 0.9em;
        cursor: pointer;
    }

    .tooltip div {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        padding: 10px;
        background: #333;
        color: #fff;
        font-size: 0.8em;
        border-radius: 4px;
        white-space: nowrap;
    }

    .tooltip:hover div {
        display: block;
        z-index: 1;
    }
</style>

<body>
    <h2>Estimate Calculator</h2>


    <article>
        <h1>オンライン自動見積り</h1>

        <p id="fixedBox" class="price fixed"><span id="plugin_form_price">1,065,000</span>円（税別）<em>基本最低価格が425,000円スタートとなります。</em></p>


        <form action="/form/send?id=web-estimate" method="post" id="plugin_form" class="validate">
            <input type="hidden" name="plugin_form[id]" value="web-estimate">
            <dl>
                <dt class="tooltip">HP制作基本料金<i class="fa-solid fa-question" ontouchstart="">
                        <div>トップページデザイン・コーディングなどを含む基本費用</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[bsic]" disabled="disabled" class="validate[required]">
                        <option value="必要">必須（200,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][bsic]" value="HP制作基本料金">
                    <input type="hidden" name="plugin_form[__price][bsic][必要]" value="200000">
                    <input type="hidden" name="plugin_form[__price][bsic]" value="200000">
                    <input type="hidden" name="plugin_form[bsic]" value="200,000円">
                </dd>

                <dt class="tooltip">追加トップページデザイン提案<i class="fa-solid fa-question" ontouchstart="">
                        <div>初回に提案するPCデザインの数です。2案以上あると比較して選びやすくなります。</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[topdesign]">
                        <option value="">選択して下さい</option>
                        <!-- <option value="1案（追加費用なし）">1案（追加費用なし）</option>
                        <option value="2案 100,000円">2案（＋100,000円）</option>
                        <option value="3案 200,000円">3案（＋200,000円）</option> -->

                        <option value="1案（追加費用なし）" data-price="0">1案（追加費用なし）</option>
<option value="2案 100,000円" data-price="100000">2案（＋100,000円）</option>
<option value="3案 200,000円" data-price="200000">3案（＋200,000円）</option>

                    </select>
                    <input type="hidden" name="plugin_form[__label][topdesign]" value="追加トップページデザイン提案">
                    <input type="hidden" name="plugin_form[__price][topdesign][2案 100,000円]" value="100000">
                    <input type="hidden" name="plugin_form[__price][topdesign][3案 200,000円]" value="200000">
                </dd>

                <dt class="tooltip">ニュース更新機能/CMS<i class="fa-solid fa-question" ontouchstart="">
                        <div>ニュース更新がお客様ご自身でできるプログラム。ブログなどと同様に、写真のアップロードやお知らせの掲載が簡単にできます。（<a href="/solution/web/price/cms-install" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[cms]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="必要 50,000円">必要（50,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][cms]" value="ニュース更新機能CMS">
                    <input type="hidden" name="plugin_form[__price][cms][必要 50,000円]" value="50000">
                </dd>

                <dt class="tooltip">追加更新プログラム/CMS<i class="fa-solid fa-question" ontouchstart="">
                        <div>スタッフ紹介ページ、事例掲載ページなど、簡易的にページを追加・更新できるプログラムの設置（<a href="/solution/web/price/cms-install" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[freo]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="1個所 50,000円">1個所（50,000円）</option>
                        <option value="2個所 100,000円">2個所（100,000円）</option>
                        <option value="3個所 150,000円">3個所（150,000円）</option>
                        <option value="4個所 200,000円">4個所（200,000円）</option>
                        <option value="5個所 250,000円">5個所（250,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][freo]" value="追加更新プログラムCMS ">
                    <input type="hidden" name="plugin_form[__price][freo][1個所 50,000円]" value="50000">
                    <input type="hidden" name="plugin_form[__price][freo][2個所 100,000円]" value="100000">
                    <input type="hidden" name="plugin_form[__price][freo][3個所 150,000円]" value="150000">
                    <input type="hidden" name="plugin_form[__price][freo][4個所 200,000円]" value="200000">
                    <input type="hidden" name="plugin_form[__price][freo][5個所 250,000円]" value="250000">
                </dd>

                <dt class="tooltip">原稿作成<i class="fa-solid fa-question" ontouchstart="">
                        <div>各ページの原稿を作成する費用です。お客様ご自身でワードファイルなどでまとめていただける場合は費用はかかりません。会社概要などのページはお客様が用意して、特に力をいれたいサービス紹介ページなどを部分的に弊社にご依頼いただいても大丈夫です。（業種や内容によって価格は変動します）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[docu]">
                        <option value="">選択して下さい</option>
                        <option value="お客様ご自身で全て用意">お客様ご自身で全て用意</option>
                        <option value="1ページ 40,000円">1ページ（40,000円）</option>
                        <option value="2ページ 80,000円">2ページ（80,000円）</option>
                        <option value="3ページ 120,000円">3ページ（120,000円）</option>
                        <option value="4ページ 160,000円">4ページ（160,000円）</option>
                        <option value="5ページ 200,000円">5ページ（200,000円）</option>
                        <option value="6ページ 240,000円">6ページ（240,000円）</option>
                        <option value="7ページ 280,000円">7ページ（280,000円）</option>
                        <option value="8ページ 320,000円">8ページ（320,000円）</option>
                        <option value="9ページ 360,000円">9ページ（360,000円）</option>
                        <option value="10ページ 400,000円">10ページ（400,000円）</option>
                        <option value="15ページ 600,000円">15ページ（600,000円）</option>
                        <option value="20ページ 800,000円">20ページ（800,000円）</option>
                        <option value="25ページ 1,000,000円">25ページ（1,000,000円）</option>
                        <option value="30ページ 1,200,000円">30ページ（1,200,000円）</option>

                    </select>
                    <input type="hidden" name="plugin_form[__label][docu]" value="原稿作成">
                    <input type="hidden" name="plugin_form[__price][docu][1ページ 40,000円]" value="40000">
                    <input type="hidden" name="plugin_form[__price][docu][2ページ 80,000円]" value="80000">
                    <input type="hidden" name="plugin_form[__price][docu][3ページ 120,000円]" value="120000">
                    <input type="hidden" name="plugin_form[__price][docu][4ページ 160,000円]" value="160000">
                    <input type="hidden" name="plugin_form[__price][docu][5ページ 200,000円]" value="200000">
                    <input type="hidden" name="plugin_form[__price][docu][6ページ 240,000円]" value="240000">
                    <input type="hidden" name="plugin_form[__price][docu][7ページ 280,000円]" value="280000">
                    <input type="hidden" name="plugin_form[__price][docu][8ページ 320,000円]" value="320000">
                    <input type="hidden" name="plugin_form[__price][docu][9ページ 360,000円]" value="360000">
                    <input type="hidden" name="plugin_form[__price][docu][10ページ 400,000円]" value="400000">
                    <input type="hidden" name="plugin_form[__price][docu][15ページ 600,000円]" value="600000">
                    <input type="hidden" name="plugin_form[__price][docu][20ページ 800,000円]" value="800000">
                    <input type="hidden" name="plugin_form[__price][docu][25ページ 1,000,000円]" value="1000000">
                    <input type="hidden" name="plugin_form[__price][docu][30ページ 1,200,000円]" value="1200000">
                </dd>

                <dt class="tooltip">流し込みページ<i class="fa-solid fa-question" ontouchstart="">
                        <div>簡易的な流し込みページ。デザイン要素はそこまで多くない、テキストベースのページです。（<a href="/solution/web/price/page-easy" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[inner]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="1ページ 5,000円">1ページ（5,000円)</option>
                        <option value="2ページ 10,000円">2ページ（10,000円)</option>
                        <option value="3ページ 15,000円">3ページ（15,000円)</option>
                        <option value="4ページ 20,000円">4ページ（20,000円)</option>
                        <option value="5ページ 25,000円">5ページ（25,000円)</option>
                        <option value="6ページ 30,000円">6ページ（30,000円)</option>
                        <option value="7ページ 35,000円">7ページ（35,000円)</option>
                        <option value="8ページ 40,000円">8ページ（40,000円)</option>
                        <option value="9ページ 45,000円">9ページ（45,000円)</option>
                        <option value="10ページ 50,000円">10ページ（50,000円)</option>
                        <option value="15ページ 75,000円">15ページ（75,000円)</option>
                        <option value="20ページ 100,000円">20ページ（100,000円)</option>
                        <option value="25ページ 125,000円">25ページ（125,000円)</option>
                        <option value="30ページ 150,000円">30ページ（150,000円)</option>
                        <option value="35ページ 175,000円">35ページ（175,000円)</option>
                        <option value="40ページ 200,000円">40ページ（200,000円)</option>
                        <option value="45ページ 225,000円">45ページ（225,000円)</option>
                        <option value="50ページ 250,000円">50ページ（250,000円)</option>
                        <option value="100ページ 500,000円">100ページ（500,000円)</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][inner]" value="流し込みページ">
                    <input type="hidden" name="plugin_form[__price][inner][1ページ 5,000円]" value="5000">
                    <input type="hidden" name="plugin_form[__price][inner][2ページ 10,000円]" value="10000">
                    <input type="hidden" name="plugin_form[__price][inner][3ページ 15,000円]" value="15000">
                    <input type="hidden" name="plugin_form[__price][inner][4ページ 20,000円]" value="20000">
                    <input type="hidden" name="plugin_form[__price][inner][5ページ 25,000円]" value="25000">
                    <input type="hidden" name="plugin_form[__price][inner][6ページ 30,000円]" value="30000">
                    <input type="hidden" name="plugin_form[__price][inner][7ページ 35,000円]" value="35000">
                    <input type="hidden" name="plugin_form[__price][inner][8ページ 40,000円]" value="40000">
                    <input type="hidden" name="plugin_form[__price][inner][9ページ 45,000円]" value="45000">
                    <input type="hidden" name="plugin_form[__price][inner][10ページ 50,000円]" value="50000">
                    <input type="hidden" name="plugin_form[__price][inner][15ページ 75,000円]" value="75000">
                    <input type="hidden" name="plugin_form[__price][inner][20ページ 100,000円]" value="100000">
                    <input type="hidden" name="plugin_form[__price][inner][25ページ 125,000円]" value="125000">
                    <input type="hidden" name="plugin_form[__price][inner][30ページ 150,000円]" value="150000">
                    <input type="hidden" name="plugin_form[__price][inner][35ページ 175,000円]" value="175000">
                    <input type="hidden" name="plugin_form[__price][inner][40ページ 200,000円]" value="200000">
                    <input type="hidden" name="plugin_form[__price][inner][45ページ 225,000円]" value="225000">
                    <input type="hidden" name="plugin_form[__price][inner][50ページ 250,000円]" value="250000">
                    <input type="hidden" name="plugin_form[__price][inner][100ページ 500,000円]" value="500000">
                </dd>

                <dt class="tooltip">作り込みページ<i class="fa-solid fa-question" ontouchstart="">
                        <div>デザイン要素が入った内部作り込みページ。原稿料A4 1枚程度を想定しています。（<a href="/solution/web/price/page-normal" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[inner2]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="1ページ 30,000円">1ページ（30,000円)</option>
                        <option value="2ページ 60,000円">2ページ（60,000円)</option>
                        <option value="3ページ 90,000円">3ページ（90,000円)</option>
                        <option value="4ページ 120,000円">4ページ（120,000円)</option>
                        <option value="5ページ 150,000円">5ページ（150,000円)</option>
                        <option value="6ページ 180,000円">6ページ（180,000円)</option>
                        <option value="7ページ 210,000円">7ページ（210,000円)</option>
                        <option value="8ページ 240,000円">8ページ（240,000円)</option>
                        <option value="9ページ 270,000円">9ページ（270,000円)</option>
                        <option value="10ページ 300,000円">10ページ（300,000円)</option>
                        <option value="15ページ 450,000円">15ページ（450,000円)</option>
                        <option value="20ページ 600,000円">20ページ（600,000円)</option>
                        <option value="25ページ 750,000円">25ページ（750,000円)</option>
                        <option value="30ページ 900,000円">30ページ（900,000円)</option>
                        <option value="35ページ 1,050,000円">35ページ（1,050,000円)</option>
                        <option value="40ページ 1,200,000円">40ページ（1,200,000円)</option>
                        <option value="45ページ 1,350,000円">45ページ（1,350,000円)</option>
                        <option value="50ページ 1,500,000円">50ページ（1,500,000円)</option>
                        <option value="100ページ 3,000,000円">100ページ（3,000,000円)</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][inner2]" value="作り込みページ">
                    <input type="hidden" name="plugin_form[__price][inner2][1ページ 30,000円]" value="30000">
                    <input type="hidden" name="plugin_form[__price][inner2][2ページ 60,000円]" value="60000">
                    <input type="hidden" name="plugin_form[__price][inner2][3ページ 90,000円]" value="90000">
                    <input type="hidden" name="plugin_form[__price][inner2][4ページ 120,000円]" value="120000">
                    <input type="hidden" name="plugin_form[__price][inner2][5ページ 150,000円]" value="150000">
                    <input type="hidden" name="plugin_form[__price][inner2][6ページ 180,000円]" value="180000">
                    <input type="hidden" name="plugin_form[__price][inner2][7ページ 210,000円]" value="210000">
                    <input type="hidden" name="plugin_form[__price][inner2][8ページ 240,000円]" value="240000">
                    <input type="hidden" name="plugin_form[__price][inner2][9ページ 270,000円]" value="270000">
                    <input type="hidden" name="plugin_form[__price][inner2][10ページ 300,000円]" value="300000">
                    <input type="hidden" name="plugin_form[__price][inner2][15ページ 450,000円]" value="450000">
                    <input type="hidden" name="plugin_form[__price][inner2][20ページ 600,000円]" value="600000">
                    <input type="hidden" name="plugin_form[__price][inner2][25ページ 750,000円]" value="750000">
                    <input type="hidden" name="plugin_form[__price][inner2][30ページ 900,000円]" value="900000">
                    <input type="hidden" name="plugin_form[__price][inner2][35ページ 1,050,000円]" value="1050000">
                    <input type="hidden" name="plugin_form[__price][inner2][40ページ 1,200,000円]" value="1200000">
                    <input type="hidden" name="plugin_form[__price][inner2][45ページ 1,350,000円]" value="1350000">
                    <input type="hidden" name="plugin_form[__price][inner2][50ページ 1,500,000円]" value="1500000">
                    <input type="hidden" name="plugin_form[__price][inner2][100ページ 3,000,000円]" value="3000000">
                </dd>

                <dt class="tooltip">ランディングページ<i class="fa-solid fa-question" ontouchstart="">
                        <div>様々な情報を詰め込んだ、問い合わせや申し込みを獲得するためのページです。力を入れて紹介したいページや商品があるときにオススメです。（<a href="/solution/web/price/page-LP" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[landing]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="1ページ 150,000円">1ページ（150,000円)</option>
                        <option value="2ページ 300,000円">2ページ（300,000円)</option>
                        <option value="3ページ 450,000円">3ページ（450,000円)</option>
                        <option value="4ページ 600,000円">4ページ（600,000円)</option>
                        <option value="5ページ 750,000円">5ページ（750,000円)</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][landing]" value="ランディングページ">
                    <input type="hidden" name="plugin_form[__price][landing][1ページ 150,000円]" value="150000">
                    <input type="hidden" name="plugin_form[__price][landing][2ページ 300,000円]" value="300000">
                    <input type="hidden" name="plugin_form[__price][landing][3ページ 450,000円]" value="450000">
                    <input type="hidden" name="plugin_form[__price][landing][4ページ 600,000円]" value="600000">
                    <input type="hidden" name="plugin_form[__price][landing][5ページ 750,000円]" value="750000">
                </dd>

                <dt class="tooltip">漫画<i class="fa-solid fa-question" ontouchstart="">
                        <div>分かりづらい内容を漫画を使って解説。申し込み率の向上につながります。（<a href="/solution/web/price/design-manga4" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[manga]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="4コマ 100,000円">4コマ（100,000円)</option>
                        <option value="ストーリー 400,000円">ストーリー（400,000円)</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][manga]" value="漫画">
                    <input type="hidden" name="plugin_form[__price][manga][4コマ 100,000円]" value="100000">
                    <input type="hidden" name="plugin_form[__price][manga][ストーリー 400,000円]" value="400000">
                </dd>

                <dt class="tooltip">お問合せフォーム<i class="fa-solid fa-question" ontouchstart="">
                        <div>無料体験申込みや、資料請求、お問合せフォームなど（<a href="/solution/web/price/cms-form" class="blank" target="_blank">説明ページ</a>）。10個以上の項目追加時は、1個につき＋1,000円かかります。</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[contact]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="メーラー起動（無料）">メーラー起動（無料）</option>
                        <option value="バックメール・履歴保存機能付き 項目10個まで 50,000円">バックメール・履歴保存機能 項目10個まで（50,000円）</option>
                        <option value="バックメール・履歴保存機能付き 項目20個まで 60,000円">バックメール・履歴保存機能 項目20個まで（60,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][contact]" value="お問合せフォーム">
                    <input type="hidden" name="plugin_form[__price][contact][バックメール・履歴保存機能付き 項目10個まで 50,000円]" value="50000">
                    <input type="hidden" name="plugin_form[__price][contact][バックメール・履歴保存機能付き 項目20個まで 60,000円]" value="60000">
                    <input type="hidden" name="plugin_form[__price][contact][メーラー起動（無料）]" value="0">
                </dd>

                <dt class="tooltip">スマホ対応基本料金<i class="fa-solid fa-question" ontouchstart="">
                        <div>スマートフォンに対応するための基本料金（CSSの設定等）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[smart]">
                        <option value="">選択して下さい</option>
                        <option value="スマートフォンに対応しない">スマートフォンに対応しない</option>
                        <option value="スマートフォンに対応する 100,000円">スマートフォンに対応する（100,000円）</option>
                        <option value="スマートフォン&amp;タブレットに対応する 200,000円">スマートフォン&amp;タブレットに対応する（200,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][smart]" value="スマホ対応基本料金">
                    <input type="hidden" name="plugin_form[__price][smart][スマートフォンに対応する 100,000円]" value="100000">
                    <input type="hidden" name="plugin_form[__price][smart][スマートフォン&amp;タブレットに対応する 200,000円]" value="200000">
                </dd>

                <dt class="tooltip">スマホ対応ページ<i class="fa-solid fa-question" ontouchstart="">
                        <div>スマートフォン用 レスポンシブ対応</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[responsive]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="1ページ 5,000円">1ページ（5,000円)</option>
                        <option value="2ページ 10,000円">2ページ（10,000円)</option>
                        <option value="3ページ 15,000円">3ページ（15,000円)</option>
                        <option value="4ページ 20,000円">4ページ（20,000円)</option>
                        <option value="5ページ 25,000円">5ページ（25,000円)</option>
                        <option value="6ページ 30,000円">6ページ（30,000円)</option>
                        <option value="7ページ 35,000円">7ページ（35,000円)</option>
                        <option value="8ページ 40,000円">8ページ（40,000円)</option>
                        <option value="9ページ 45,000円">9ページ（45,000円)</option>
                        <option value="10ページ 50,000円">10ページ（50,000円)</option>
                        <option value="15ページ 75,000円">15ページ（75,000円)</option>
                        <option value="20ページ 100,000円">20ページ（100,000円)</option>
                        <option value="25ページ 125,000円">25ページ（125,000円)</option>
                        <option value="30ページ 150,000円">30ページ（150,000円)</option>
                        <option value="35ページ 175,000円">35ページ（175,000円)</option>
                        <option value="40ページ 200,000円">40ページ（200,000円)</option>
                        <option value="45ページ 225,000円">45ページ（225,000円)</option>
                        <option value="50ページ 250,000円">50ページ（250,000円)</option>
                        <option value="100ページ 500,000円">100ページ（500,000円)</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][responsive]" value="スマホ対応ページ">
                    <input type="hidden" name="plugin_form[__price][responsive][1ページ 5,000円]" value="5000">
                    <input type="hidden" name="plugin_form[__price][responsive][2ページ 10,000円]" value="10000">
                    <input type="hidden" name="plugin_form[__price][responsive][3ページ 15,000円]" value="15000">
                    <input type="hidden" name="plugin_form[__price][responsive][4ページ 20,000円]" value="20000">
                    <input type="hidden" name="plugin_form[__price][responsive][5ページ 25,000円]" value="25000">
                    <input type="hidden" name="plugin_form[__price][responsive][6ページ 30,000円]" value="30000">
                    <input type="hidden" name="plugin_form[__price][responsive][7ページ 35,000円]" value="35000">
                    <input type="hidden" name="plugin_form[__price][responsive][8ページ 40,000円]" value="40000">
                    <input type="hidden" name="plugin_form[__price][responsive][9ページ 45,000円]" value="45000">
                    <input type="hidden" name="plugin_form[__price][responsive][10ページ 50,000円]" value="50000">
                    <input type="hidden" name="plugin_form[__price][responsive][15ページ 75,000円]" value="75000">
                    <input type="hidden" name="plugin_form[__price][responsive][20ページ 100,000円]" value="100000">
                    <input type="hidden" name="plugin_form[__price][responsive][25ページ 125,000円]" value="125000">
                    <input type="hidden" name="plugin_form[__price][responsive][30ページ 150,000円]" value="150000">
                    <input type="hidden" name="plugin_form[__price][responsive][35ページ 175,000円]" value="175000">
                    <input type="hidden" name="plugin_form[__price][responsive][40ページ 200,000円]" value="200000">
                    <input type="hidden" name="plugin_form[__price][responsive][45ページ 225,000円]" value="225000">
                    <input type="hidden" name="plugin_form[__price][responsive][50ページ 250,000円]" value="250000">
                    <input type="hidden" name="plugin_form[__price][responsive][100ページ 500,000円]" value="500000">
                </dd>

                <dt class="tooltip">タブレット対応ページ<i class="fa-solid fa-question" ontouchstart="">
                        <div>タブレット用 レスポンシブ対応</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[tabletp]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="1ページ 5,000円">1ページ（5,000円)</option>
                        <option value="2ページ 10,000円">2ページ（10,000円)</option>
                        <option value="3ページ 15,000円">3ページ（15,000円)</option>
                        <option value="4ページ 20,000円">4ページ（20,000円)</option>
                        <option value="5ページ 25,000円">5ページ（25,000円)</option>
                        <option value="6ページ 30,000円">6ページ（30,000円)</option>
                        <option value="7ページ 35,000円">7ページ（35,000円)</option>
                        <option value="8ページ 40,000円">8ページ（40,000円)</option>
                        <option value="9ページ 45,000円">9ページ（45,000円)</option>
                        <option value="10ページ 50,000円">10ページ（50,000円)</option>
                        <option value="15ページ 75,000円">15ページ（75,000円)</option>
                        <option value="20ページ 100,000円">20ページ（100,000円)</option>
                        <option value="25ページ 125,000円">25ページ（125,000円)</option>
                        <option value="30ページ 150,000円">30ページ（150,000円)</option>
                        <option value="35ページ 175,000円">35ページ（175,000円)</option>
                        <option value="40ページ 200,000円">40ページ（200,000円)</option>
                        <option value="45ページ 225,000円">45ページ（225,000円)</option>
                        <option value="50ページ 250,000円">50ページ（250,000円)</option>
                        <option value="100ページ 500,000円">100ページ（500,000円)</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][tabletp]" value="タブレット対応ページ">
                    <input type="hidden" name="plugin_form[__price][tabletp][1ページ 5,000円]" value="5000">
                    <input type="hidden" name="plugin_form[__price][tabletp][2ページ 10,000円]" value="10000">
                    <input type="hidden" name="plugin_form[__price][tabletp][3ページ 15,000円]" value="15000">
                    <input type="hidden" name="plugin_form[__price][tabletp][4ページ 20,000円]" value="20000">
                    <input type="hidden" name="plugin_form[__price][tabletp][5ページ 25,000円]" value="25000">
                    <input type="hidden" name="plugin_form[__price][tabletp][6ページ 30,000円]" value="30000">
                    <input type="hidden" name="plugin_form[__price][tabletp][7ページ 35,000円]" value="35000">
                    <input type="hidden" name="plugin_form[__price][tabletp][8ページ 40,000円]" value="40000">
                    <input type="hidden" name="plugin_form[__price][tabletp][9ページ 45,000円]" value="45000">
                    <input type="hidden" name="plugin_form[__price][tabletp][10ページ 50,000円]" value="50000">
                    <input type="hidden" name="plugin_form[__price][tabletp][15ページ 75,000円]" value="75000">
                    <input type="hidden" name="plugin_form[__price][tabletp][20ページ 100,000円]" value="100000">
                    <input type="hidden" name="plugin_form[__price][tabletp][25ページ 125,000円]" value="125000">
                    <input type="hidden" name="plugin_form[__price][tabletp][30ページ 150,000円]" value="150000">
                    <input type="hidden" name="plugin_form[__price][tabletp][35ページ 175,000円]" value="175000">
                    <input type="hidden" name="plugin_form[__price][tabletp][40ページ 200,000円]" value="200000">
                    <input type="hidden" name="plugin_form[__price][tabletp][45ページ 225,000円]" value="225000">
                    <input type="hidden" name="plugin_form[__price][tabletp][50ページ 250,000円]" value="250000">
                    <input type="hidden" name="plugin_form[__price][tabletp][100ページ 500,000円]" value="500000">
                </dd>

                <dt class="tooltip">写真撮影<i class="fa-solid fa-question" ontouchstart="">
                        <div>HPの各ページで使用する写真に素材集などを使わずにお客様ご自身の施設、スタッフを掲載するための撮影（交通費別途）（<a href="/solution/photo" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[photo]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="お客様ご自身で用意">お客様ご自身で用意</option>
                        <option value="撮影する（3時間）30,000円">撮影する/3時間（30,000円）</option>
                        <option value="撮影する（6時間）45,000円">撮影する/6時間（45,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][photo]" value="写真撮影">
                    <input type="hidden" name="plugin_form[__price][photo][撮影する（3時間）30,000円]" value="30000">
                    <input type="hidden" name="plugin_form[__price][photo][撮影する（6時間）45,000円]" value="45000">
                </dd>
                <dt class="tooltip">基本SEO対策<i class="fa-solid fa-question" ontouchstart="">
                        <div>検索エンジン対策でページごとに細かな設定ができるようにして、御社のHPが検索エンジンで上位表示されやすくする最低限の設定をします。WEBから売り上げを獲得したい方には必須の内容です。</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[seo]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="対策する 150,000円">対策する（150,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][seo]" value="基本SEO対策">
                    <input type="hidden" name="plugin_form[__price][seo][対策する 150,000円]" value="150000">
                </dd>

                <dt class="tooltip">インタビュー<i class="fa-solid fa-question" ontouchstart="">
                        <div>ライターがインタビューをして、文章を作成します。1ページ約1,500文字です。ライターの半日拘束費用4万円＋1ページ2万円です。訪問時の交通費は別途となります。（<a href="/solution/web/price/page-interview" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[writer]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="1ページ（ライター拘束x1）60,000円">1ページ（ライター拘束x1）60,000円</option>
                        <option value="2ページ（ライター拘束x1）80,000円">2ページ（ライター拘束x1）80,000円</option>
                        <option value="3ページ（ライター拘束x1）100,000円">3ページ（ライター拘束x1）100,000円</option>
                        <option value="4ページ（ライター拘束x1）120,000円">4ページ（ライター拘束x1）120,000円</option>
                        <option value="5ページ（ライター拘束x1）140,000円">5ページ（ライター拘束x1）140,000円</option>
                        <option value="6ページ（ライター拘束x2）180,000円">6ページ（ライター拘束x2）180,000円</option>
                        <option value="7ページ（ライター拘束x2）200,000円">7ページ（ライター拘束x2）200,000円</option>
                        <option value="8ページ（ライター拘束x2）220,000円">8ページ（ライター拘束x2）220,000円</option>
                        <option value="9ページ（ライター拘束x2）240,000円">9ページ（ライター拘束x2）240,000円</option>
                        <option value="10ページ（ライター拘束x2）260,000円">10ページ（ライター拘束x2）260,000円</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][writer]" value="インタビュー">
                    <input type="hidden" name="plugin_form[__price][writer][1ページ（ライター拘束x1）60,000円]" value="60000">
                    <input type="hidden" name="plugin_form[__price][writer][2ページ（ライター拘束x1）80,000円]" value="80000">
                    <input type="hidden" name="plugin_form[__price][writer][3ページ（ライター拘束x1）100,000円]" value="100000">
                    <input type="hidden" name="plugin_form[__price][writer][4ページ（ライター拘束x1）120,000円]" value="120000">
                    <input type="hidden" name="plugin_form[__price][writer][5ページ（ライター拘束x1）140,000円]" value="140000">
                    <input type="hidden" name="plugin_form[__price][writer][6ページ（ライター拘束x2）180,000円]" value="180000">
                    <input type="hidden" name="plugin_form[__price][writer][7ページ（ライター拘束x2）200,000円]" value="200000">
                    <input type="hidden" name="plugin_form[__price][writer][8ページ（ライター拘束x2）220,000円]" value="220000">
                    <input type="hidden" name="plugin_form[__price][writer][9ページ（ライター拘束x2）240,000円]" value="240000">
                    <input type="hidden" name="plugin_form[__price][writer][10ページ（ライター拘束x2）260,000円]" value="260000">
                </dd>

                <dt class="tooltip">ロゴ制作<i class="fa-solid fa-question" ontouchstart="">
                        <div>ホームページのみでなく、名刺や封筒などにも使えるロゴデザイン（<a href="/solution/web/price/logo" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[logo]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="1案作成・修正2回まで 60,000円">1案作成したものから選択。修正2回まで（60,000円）</option>
                        <option value="2案作成・修正2回まで 80,000円">2案作成したものから選択。修正2回まで（80,000円）</option>
                        <option value="3案作成・修正2回まで 100,000円">3案作成したものから選択。修正2回まで（100,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][logo]" value="ロゴ制作 ">
                    <input type="hidden" name="plugin_form[__price][logo][1案作成・修正2回まで 60,000円]" value="60000">
                    <input type="hidden" name="plugin_form[__price][logo][2案作成・修正2回まで 80,000円]" value="80000">
                    <input type="hidden" name="plugin_form[__price][logo][3案作成・修正2回まで 100,000円]" value="100000">
                </dd>

                <dt class="tooltip">Googleビジネス代行登録<i class="fa-solid fa-question" ontouchstart="">
                        <div>Google検索およびマップで御社の正しい情報を紹介することが可能です。</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[googleb]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="依頼する 30,000円">依頼する（30,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][googleb]" value="Googleビジネス代行登録">
                    <input type="hidden" name="plugin_form[__price][googleb][依頼する 30,000円]" value="30000">
                </dd>

                <dt class="tooltip">ディレクション費用<i class="fa-solid fa-question" ontouchstart="">
                        <div>作業進行などに掛かる人件費（概算）。ボリュームによって異なります。</div>
                    </i></dt>
                <dd>
                    <input type="hidden" name="plugin_form[__label][direc]" value="ディレクション費用">
                    <input type="hidden" name="plugin_form[__price][direc][必要]" value="200000">
                    <input type="hidden" name="plugin_form[__price][direc]" value="200000">
                    <input type="hidden" name="plugin_form[direc]" value="200,000円">
                    <select name="plugin_form[direc]" disabled="disabled" class="validate[required]">
                        <option value="必要">必須（200,000円）</option>
                    </select>
                </dd>

                <dt class="tooltip">ドメイン取得費用<i class="fa-solid fa-question" ontouchstart="">
                        <div>新規ドメイン（例：s-contigo.com）取得費用（初回1年分）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[domain]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="取得する 10,000円">取得する（10,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][domain]" value="ドメイン取得費用">
                    <input type="hidden" name="plugin_form[__price][domain][取得する 10,000円]" value="10000">
                </dd>

                <dt class="tooltip">ドメイン移管手数料<i class="fa-solid fa-question" ontouchstart="">
                        <div>既存サイトのドメイン（例：s-contigo.com）の管理を現在の会社から弊社に移行をするための手続きです。</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[transfer]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="移管する 30,000円">移管する（30,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][transfer]" value="ドメイン移管手数料">
                    <input type="hidden" name="plugin_form[__price][transfer][移管する 30,000円]" value="30000">
                </dd>
                <dt class="tooltip">サーバー初期設定費用<i class="fa-solid fa-question" ontouchstart="">
                        <div>初回のみかかるサーバーの初期設定費用</div>
                    </i></dt>
                <dd><select name="plugin_form[server]" disabled="disabled" class="validate[required]">
                        <option value="必要">必須（25,000円）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][server]" value="サーバー初期設定費用 ">
                    <input type="hidden" name="plugin_form[__price][server][必要]" value="25000">
                    <input type="hidden" name="plugin_form[__price][server]" value="25000">
                    <input type="hidden" name="plugin_form[server]" value="25,000円">
                </dd>

                <dt class="tooltip">メールアドレス取得<i class="fa-solid fa-question" ontouchstart="">
                        <div>ドメインを新規取得をされる場合は、独自ドメインにてメールアドレスを発行することができます。</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[mailad]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="必要">必要（無料）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][mailad]" value="メールアドレス取得">
                    <input type="hidden" name="plugin_form[__price][mailad][必要]" value="0">
                </dd>
                <dt class="tooltip">SSL設置費用<i class="fa-solid fa-question" ontouchstart="">
                        <div>問い合わせフォーム等で送信する個人情報の暗号化。（<a href="/solution/web/ssl" class="blank" target="_blank">説明ページ</a>）</div>
                    </i></dt>
                <dd>
                    <select name="plugin_form[ssl]">
                        <option value="">選択して下さい</option>
                        <option value="不要">不要</option>
                        <option value="簡易SSL 10,000円/初回のみ">簡易SSL（10,000円/初回のみ）</option>
                        <option value="クイック認証SSL 30,000円/1年">クイック認証SSL（30,000円/1年）</option>
                        <option value="企業認証SSL 90,000円/1年">企業認証SSL（90,000円/1年）</option>
                        <option value="EV SSL 200,000円/1年">EV SSL（200,000円/1年）</option>
                    </select>
                    <input type="hidden" name="plugin_form[__label][ssl]" value="SSL設置費用">
                    <input type="hidden" name="plugin_form[__price][ssl][簡易SSL 10,000円/初回のみ]" value="10000">
                    <input type="hidden" name="plugin_form[__price][ssl][クイック認証SSL 30,000円/1年]" value="30000">
                    <input type="hidden" name="plugin_form[__price][ssl][企業認証SSL 90,000円/1年]" value="90000">
                    <input type="hidden" name="plugin_form[__price][ssl][EV SSL 200,000円/1年]" value="200000">
                </dd>
            </dl>
            <input type="hidden" name="plugin_form[__end][price]" value="円">
            <input type="hidden" name="plugin_form[__label][price]" value="合計金額（税別）">

            <section>
                <h2>お客様情報</h2>
                <p>大変申し訳ございませんが、<strong>コンペ・相見積もり</strong>の場合は辞退させていただいております。また、銀行に提出するためのお見積り（融資が目的でHP制作は検討をしていないなど）もお断りをしております。予めご了承ください。</p>

                <dl>
                    <dt>ご依頼内容 <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <select name="plugin_form[subject]" class="validate[required]">
                            <option value="">選択してください</option>
                            <option value="新規製作">新規製作</option>
                            <option value="リニューアル">リニューアル</option>
                            <option value="その他">その他</option>
                        </select>
                        <input type="hidden" name="plugin_form[__label][subject]" value="ご依頼内容">
                        <input type="hidden" name="plugin_form[__require][subject]" value="1">
                    </dd>
                    <dt>会社名/団体名 <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <input type="text" name="plugin_form[company]" value="" placeholder="例：スタジオコンチーゴ株式会社" class="validate[required]">
                        <input type="hidden" name="plugin_form[__label][company]" value="会社名団体名">
                        <input type="hidden" name="plugin_form[__type][company]" value="line">
                        <input type="hidden" name="plugin_form[__require][company]" value="1">
                    </dd>
                    <dt>ご担当者様 <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <input type="text" name="plugin_form[name]" value="" placeholder="例：佐藤太郎" class="validate[required]">
                        <input type="hidden" name="plugin_form[__label][name]" value="ご担当者様">
                        <input type="hidden" name="plugin_form[__require][name]" value="1">
                        <input type="hidden" name="plugin_form[__type][name]" value="line">
                    </dd>
                    <dt>メールアドレス <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <input type="email" name="plugin_form[mail]" value="" style="ime-mode:disabled;" placeholder="例：toiawase@s-contigo.com" class="validate[required,custom[email]] width300">
                        <input type="hidden" name="plugin_form[__label][mail]" value="メールアドレス">
                        <input type="hidden" name="plugin_form[__require][mail]" value="1">
                        <input type="hidden" name="plugin_form[__type][mail]" value="mail">
                    </dd>
                    <dt>現HPのURL</dt>
                    <dd>
                        <input type="url" name="plugin_form[url]" style="ime-mode:disabled;" value="" placeholder="例：https://www.s-contigo.com" 　class="validate[required]">
                        <input type="hidden" name="plugin_form[__label][url]" value="HPのURL">
                        <input type="hidden" name="plugin_form[__type][url]" value="line"><br>
                    </dd>
                    <dt>電話番号 <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <input type="tel" name="plugin_form[tel]" style="ime-mode:disabled;" value="" placeholder="例：049-275-3777" class="validate[required,custom[phone]] width300">
                        <input type="hidden" name="plugin_form[__label][tel]" value="電話番号">
                        <input type="hidden" name="plugin_form[__require][tel]" value="1">
                        <input type="hidden" name="plugin_form[__type][tel]" value="line"><br>
                    </dd>
                    <dt>郵便番号 <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <input type="text" name="plugin_form[zipcode]" style="ime-mode:disabled; width:100px;" value="" id="plugin_form_zipcode" class="validate[required]width100">
                        <input type="hidden" name="plugin_form[__label][zipcode]" value="郵便番号">
                        <input type="hidden" name="plugin_form[__require][zipcode]" value="1">
                        <input type="hidden" name="plugin_form[__type][zipcode]" value="line">
                    </dd>
                    <dt>都道府県 <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <select name="plugin_form[prefecture]" class="validate[required] width300">
                            <option value="">選択してください</option>
                            <option value="北海道">北海道</option>
                            <option value="青森県">青森県</option>
                            <option value="岩手県">岩手県</option>
                            <option value="宮城県">宮城県</option>
                            <option value="秋田県">秋田県</option>
                            <option value="山形県">山形県</option>
                            <option value="福島県">福島県</option>
                            <option value="茨城県">茨城県</option>
                            <option value="栃木県">栃木県</option>
                            <option value="群馬県">群馬県</option>
                            <option value="埼玉県">埼玉県</option>
                            <option value="千葉県">千葉県</option>
                            <option value="東京都">東京都</option>
                            <option value="神奈川県">神奈川県</option>
                            <option value="山梨県">山梨県</option>
                            <option value="長野県">長野県</option>
                            <option value="新潟県">新潟県</option>
                            <option value="富山県">富山県</option>
                            <option value="石川県">石川県</option>
                            <option value="福井県">福井県</option>
                            <option value="岐阜県">岐阜県</option>
                            <option value="静岡県">静岡県</option>
                            <option value="愛知県">愛知県</option>
                            <option value="三重県">三重県</option>
                            <option value="滋賀県">滋賀県</option>
                            <option value="京都府">京都府</option>
                            <option value="大阪府">大阪府</option>
                            <option value="兵庫県">兵庫県</option>
                            <option value="奈良県">奈良県</option>
                            <option value="和歌山県">和歌山県</option>
                            <option value="鳥取県">鳥取県</option>
                            <option value="島根県">島根県</option>
                            <option value="岡山県">岡山県</option>
                            <option value="広島県">広島県</option>
                            <option value="山口県">山口県</option>
                            <option value="徳島県">徳島県</option>
                            <option value="香川県">香川県</option>
                            <option value="愛媛県">愛媛県</option>
                            <option value="高知県">高知県</option>
                            <option value="福岡県">福岡県</option>
                            <option value="佐賀県">佐賀県</option>
                            <option value="長崎県">長崎県</option>
                            <option value="熊本県">熊本県</option>
                            <option value="大分県">大分県</option>
                            <option value="宮崎県">宮崎県</option>
                            <option value="鹿児島県">鹿児島県</option>
                            <option value="沖縄県">沖縄県</option>
                        </select>
                        <input type="hidden" name="plugin_form[__label][prefecture]" value="都道府県">
                        <input type="hidden" name="plugin_form[__require][prefecture]" value="1">
                    </dd>
                    <dt>住所 <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <input type="text" name="plugin_form[address]" class="validate[required] width300">
                        <input type="hidden" name="plugin_form[__label][address]" value="住所">
                        <input type="hidden" name="plugin_form[__type][address]" value="line">
                        <input type="hidden" name="plugin_form[__require][address]" value="1">
                    </dd>
                    <dt>マンション名等</dt>
                    <dd>
                        <input type="text" name="plugin_form[mansion]">
                        <input type="hidden" name="plugin_form[__label][mansion]" value="マンション名等">
                        <input type="hidden" name="plugin_form[__type][mansion]" value="line">
                    </dd>
                    <dt>ご要望・コメント <abbr class="attention" title="入力必須">必須</abbr></dt>
                    <dd>
                        <textarea name="plugin_form[message]" placeholder="ご要望・コメントを具体的にご記載いただいた場合のみ、返答をさせていただいております。取り急ぎお見積もりだけご希望の場合は、返答をしておりません。ご了承ください。" class="validate[required]"></textarea><br>
                        <input type="hidden" name="plugin_form[__label][message]" value="ご要望・コメント">
                        <input type="hidden" name="plugin_form[__require][message]" value="1">
                    </dd>
                </dl>
                <p class="conversion"><input type="submit" value="送信する"></p>
            </section>
        </form>

        <script>
            jQuery(function($) {
                var nav = $('#fixedBox'),
                    offset = nav.offset();
                $(window).scroll(function() {
                    if ($(window).scrollTop() > offset.top) {
                        nav.addClass('fixed');
                    } else {
                        nav.removeClass('fixed');
                    }
                });
            });
        </script>
    </article>


    <script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('plugin_form');
    const priceDisplay = document.getElementById('plugin_form_price');

    function calculateTotal() {
        let total = 1065000; // 初期基本金額

        // すべてのselect要素を取得し、選択されたオプションのdata-price属性値を合計に加算
        const selects = form.querySelectorAll('select[name^="plugin_form["]');
        selects.forEach(select => {
            const selectedOption = select.options[select.selectedIndex];
            const price = parseInt(selectedOption.getAttribute('data-price')) || 0;
            total += price;
        });

        // 合計金額をpriceDisplayに表示
        priceDisplay.textContent = total.toLocaleString();
    }

    // 各select要素にイベントリスナーを設定して変更時に再計算
    const selects = form.querySelectorAll('select[name^="plugin_form["]');
    selects.forEach(select => {
        select.addEventListener('change', calculateTotal);
    });

    // 初期読み込み時に計算実行
    calculateTotal();
});

    </script>

</body>

</html>