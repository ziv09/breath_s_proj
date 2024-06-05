// 获取按钮和表单元素
const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const record = document.getElementById('record');
// 获取当前日期并格式化为 YYYY-MM-DD
const today = new Date();
const year = today.getFullYear();
const month = String(today.getMonth() + 1).padStart(2, '0'); // 补零
const day = String(today.getDate()).padStart(2, '0'); // 补零
const formattedDate = `${year}-${month}-${day}`;

// 设置日期输入字段的默认值为今天
const dateInput = document.getElementById('time');
dateInput.value = formattedDate;

// 添加点击事件监听器，阻止表单提交
document.querySelector('.btn1').addEventListener('click', (event) => {
    event.preventDefault();
    record.value = "支出";
    // 处理支出按钮点击事件
    console.log('支出按钮被点击');
});

document.querySelector('.btn2').addEventListener('click', (event) => {
    event.preventDefault();
    record.value = "收入";
    // 处理收入按钮点击事件
    console.log('收入按钮被点击');
});

btn1.addEventListener('click', () => {
    btn1.classList.add('btn1-style');
    btn1.classList.remove('btn2-style');
    btn2.classList.add('btn2-style');
    btn2.classList.remove('btn1-style');
});

btn2.addEventListener('click', () => {
    btn2.classList.add('btn1-style');
    btn2.classList.remove('btn2-style');
    btn1.classList.add('btn2-style');
    btn1.classList.remove('btn1-style');
});