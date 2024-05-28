// 获取数字按钮和运算符按钮的DOM元素
const oneBtn = document.getElementById("calc-one");
const twoBtn = document.getElementById("calc-two");
const threeBtn = document.getElementById("calc-three");
const fourBtn = document.getElementById("calc-four");
const fiveBtn = document.getElementById("calc-five");
const sixBtn = document.getElementById("calc-six");
const sevenBtn = document.getElementById("calc-seven");
const eightBtn = document.getElementById("calc-eight");
const nineBtn = document.getElementById("calc-nine");
const zeroBtn = document.getElementById("calc-zero");

const decimalBtn = document.getElementById("calc-decimal"); // 小数点按钮
const clearBtn = document.getElementById("calc-clear"); // 清除按钮
const backspaceBtn = document.getElementById("calc-backspace"); // 退格按钮
const displayValElement = document.getElementById("calc-display-val"); // 显示计算结果的元素

// 获取所有数字按钮和运算符按钮的集合
let calcNumBtns = document.getElementsByClassName("calc-btn-num"); 
let calcOperatorBtns = document.getElementsByClassName("calc-btn-operator"); 

let displayVal = "0"; // 显示的值，默认为0
let pendingVal = ""; // 待处理的值
let evalStringArray = []; // 存储运算字符串的数组

// 更新显示的值
let updateDisplayVal = (clickObj) => { 
    let btnText = clickObj.target.innerHTML; // 获取按钮上的文本内容
    if(displayVal === "0"){
        displayVal = ''; // 如果当前显示值为0，则清空
    }
    
    displayVal += btnText; // 将点击的按钮文本内容追加到显示值上
    displayValElement.value = displayVal; // 更新显示的值
}

// 执行运算
let performOperation = (clickObj) => {
    let operator = clickObj.target.innerHTML; // 获取点击的按钮文本内容
    switch(operator){
        case '+':
            pendingVal = displayVal; // 将当前显示的值存储为待处理值
            displayVal = '0'; // 重置显示的值为0
            displayValElement.value = displayVal; // 更新显示的值
            evalStringArray.push(pendingVal); // 将待处理值存入运算字符串数组
            evalStringArray.push('+'); // 存入加号
            break;
        case '-':
            pendingVal = displayVal;
            displayVal = '0';
            displayValElement.value = displayVal;
            evalStringArray.push(pendingVal);
            evalStringArray.push('-');
            break;  
        case 'x':
            pendingVal = displayVal;
            displayVal = '0';
            displayValElement.value = displayVal;
            evalStringArray.push(pendingVal);
            evalStringArray.push('*');
            break;
        case '÷':
            pendingVal = displayVal;
            displayVal = '0';
            displayValElement.value = displayVal;
            evalStringArray.push(pendingVal);
            evalStringArray.push('/');
            break;  
        case '=':
            evalStringArray.push(displayVal); // 将当前显示的值存入运算字符串数组
            let evaluation = eval(evalStringArray.join(' ')); // 计算运算字符串数组的结果
            displayVal = evaluation + ''; // 将结果转换为字符串形式
            displayValElement.value = displayVal; // 更新显示的值
            evalStringArray = []; // 清空运算字符串数组
            break; 
        default:
            break;
    }
}

// 给所有数字按钮添加点击事件监听
for(let i = 0; i < calcNumBtns.length; i++){ 
    calcNumBtns[i].addEventListener("click", updateDisplayVal, false) 
}

// 给所有运算符按钮添加点击事件监听
for(let i = 0; i < calcOperatorBtns.length; i++){ 
    calcOperatorBtns[i].addEventListener("click", performOperation, false)
}

const equalsBtn = document.getElementById("calc-equals");
equalsBtn.addEventListener("click", performOperation);

// 清除按钮点击事件处理
clearBtn.onclick = () => {
    displayVal = "0"; // 将显示的值重置为0
    pendingVal = undefined; // 清空待处理值
    evalStringArray = []; // 清空运算字符串数组
    displayValElement.value = displayVal; // 更新显示的值
}

// 退格按钮点击事件处理
backspaceBtn.onclick = () => {
    let lengthOfDisplayVal = displayVal.length; // 获取显示的值的长度
    displayVal = displayVal.slice(0, lengthOfDisplayVal - 1); // 截取除最后一位之外的值
    
    if(displayVal === ""){
        displayVal = "0"; // 如果显示的值为空，则设置为0
    }

    displayValElement.value = displayVal; // 更新显示的值
}

// 小数点按钮点击事件处理
decimalBtn.onclick = () => {
    if(!displayVal.includes('.')){ // 如果显示的值中不包含小数点
        displayVal += "."; // 将小数点追加到显示的值中
    }
    displayValElement.value = displayVal; // 更新显示的值
}
