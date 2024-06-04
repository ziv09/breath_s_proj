// nextpage.js

// 等待文檔完全加載
document.addEventListener("DOMContentLoaded", function() {
    // 檢查當前頁面是否是 tree.php
    if (window.location.href.indexOf("tree.php") > -1) {
        // 在這裡可以添加一些額外的代碼，以確保只有當用戶從 tree.php 頁面轉到 amount.php 頁面時才執行以下代碼

        // 捕捉按鈕點擊事件
        var nextButton = document.querySelector('.circle-btn');
        nextButton.addEventListener('click', function() {
            // 延遲一小段時間以便滾動效果可以應用
            setTimeout(function() {
                // 滾動到指定元素
                var scrollToElement = document.getElementById('scrollTo');
                if (scrollToElement) {
                    scrollToElement.scrollIntoView({ behavior: 'smooth' });
                }
            }, 100);
        });
    }
});
