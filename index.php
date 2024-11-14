<?php include 'layout/header.php'; ?>

    <article>
        <h1>オンライン自動見積り</h1>

        <p id="fixedBox" class="price fixed"><span id="plugin_form_price">1,065,000</span>円（税別）<em>基本最低価格が425,000円スタートとなります。</em></p>


        <form action="/form/send?id=web-estimate" method="post" id="plugin_form" class="validate">
            <input type="hidden" name="plugin_form[id]" value="web-estimate">
            <dl>
                <dt class="tooltip_hide">HP制作基本料金<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">追加トップページデザイン提案<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">ニュース更新機能/CMS<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">追加更新プログラム/CMS<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">原稿作成<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">流し込みページ<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">作り込みページ<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">ランディングページ<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">漫画<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">お問合せフォーム<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">スマホ対応基本料金<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">スマホ対応ページ<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">タブレット対応ページ<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">写真撮影<i class="fa-solid fa-question" ontouchstart="">
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
                <dt class="tooltip_hide">基本SEO対策<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">インタビュー<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">ロゴ制作<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">Googleビジネス代行登録<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">ディレクション費用<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">ドメイン取得費用<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">ドメイン移管手数料<i class="fa-solid fa-question" ontouchstart="">
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
                <dt class="tooltip_hide">サーバー初期設定費用<i class="fa-solid fa-question" ontouchstart="">
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

                <dt class="tooltip_hide">メールアドレス取得<i class="fa-solid fa-question" ontouchstart="">
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
                <dt class="tooltip_hide">SSL設置費用<i class="fa-solid fa-question" ontouchstart="">
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

            <!-- CONTACT FORMS -->
            <?php include 'components/contactForms.php'; ?>
        </form>
    </article>


    <?php include 'layout/footer.php'; ?>

</body>

</html>