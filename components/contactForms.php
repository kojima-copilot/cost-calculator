
<hr />

<section>
  <h2>お客様情報</h2>
  

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