// =================================================================
// スクロールでCSSクラス追加
// =================================================================
// ページのDOMが読み込まれた後に実行
document.addEventListener("DOMContentLoaded", function () {
  // 固定表示させるナビゲーションの要素を取得
  const nav = document.getElementById("fixedBox");
  // ナビゲーションの初期位置のオフセットを取得
  const offsetTop = nav.offsetTop;

  // スクロールイベントを監視
  window.addEventListener("scroll", function () {
    // スクロール位置がナビゲーションのオフセットよりも大きい場合
    if (window.scrollY > offsetTop) {
      // ナビゲーションに "fixed" クラスを追加し、固定表示する
      nav.classList.add("fixed");
    } else {
      // スクロール位置が戻ったら "fixed" クラスを削除して元の位置に戻す
      nav.classList.remove("fixed");
    }
  });
});

// =================================================================
// 合計金額計算
// =================================================================
document.addEventListener("DOMContentLoaded", function () {
  // フォーム全体の要素を取得
  const form = document.getElementById("plugin_form");
  // 合計金額を表示する要素を取得
  const priceDisplay = document.getElementById("plugin_form_price");

  // 合計金額を計算する関数
  function calculateTotal() {
    let total = 430000; // 初期基本金額を設定

    // すべてのselect要素を取得し、選択されたオプションの data-price 属性値を合計に加算
    // form 要素内で、名前属性 (name) が "plugin_form[" で始まる select 要素をすべて選択する
    // [name^="plugin_form["]: 属性セレクターの一種で、^= は「指定した文字列で始まる」
    const selects = form.querySelectorAll('select[name^="plugin_form["]');
    selects.forEach((select) => {
      
      // selectedIndexは、現在選択されている <option> のインデックス（番号）を返す
      const selectedOption = select.options[select.selectedIndex];
      // 選択されたオプションのdata-price属性の値を取得し、数値に変換
      const price = parseInt(selectedOption.getAttribute("data-price")) || 0;
      // 合計金額に追加
      total += price;
    });

    // 合計金額をpriceDisplay要素に表示
    priceDisplay.textContent = total.toLocaleString();
  }

  // すべてのselect要素にイベントリスナーを設定し、選択が変更されたときに合計を再計算
  const selects = form.querySelectorAll('select[name^="plugin_form["]');
  selects.forEach((select) => {
    select.addEventListener("change", calculateTotal); // 変わったら関数を実行
  });

  // 初期読み込み時に計算を実行し、初期合計金額を表示
  calculateTotal();
});
