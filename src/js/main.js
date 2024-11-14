document.addEventListener("DOMContentLoaded", function () {
  const nav = document.getElementById("fixedBox");
  const offsetTop = nav.offsetTop;

  window.addEventListener("scroll", function () {
    if (window.scrollY > offsetTop) {
      nav.classList.add("fixed");
    } else {
      nav.classList.remove("fixed");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("plugin_form");
  const priceDisplay = document.getElementById("plugin_form_price");

  function calculateTotal() {
    let total = 1065000; // 初期基本金額

    // すべてのselect要素を取得し、選択されたオプションのdata-price属性値を合計に加算
    const selects = form.querySelectorAll('select[name^="plugin_form["]');
    selects.forEach((select) => {
      const selectedOption = select.options[select.selectedIndex];
      const price = parseInt(selectedOption.getAttribute("data-price")) || 0;
      total += price;
    });

    // 合計金額をpriceDisplayに表示
    priceDisplay.textContent = total.toLocaleString();
  }

  // 各select要素にイベントリスナーを設定して変更時に再計算
  const selects = form.querySelectorAll('select[name^="plugin_form["]');
  selects.forEach((select) => {
    select.addEventListener("change", calculateTotal);
  });

  // 初期読み込み時に計算実行
  calculateTotal();
});
