// function selectOper() {
//   let element = document.getElementById("btn").value;
//   console.log(element);
//   document.write(element);
// }
var arr = [];
function dis(val) {
  document.getElementById("result").value += val;
}

// function foe exponential calculation
function expo(){
    let x = document.getElementById("result").value;
    let z = x + " e<sup>x</sup>"
    let y = Math.exp(x)
    document.getElementById("result").value=y;
    history(z,y);
}


//function that evaluates the digit and return result
function solve() {
  let x = document.getElementById("result").value;
  let hisexp = x;
  let y = eval(x);
  let hiseval = y;
  document.getElementById("result").value = y;
  history(hisexp,hiseval);
//   document.getElementById("result").value="";
}

//function that clear the display
function clr() {
  document.getElementById("result").value = "";
}

function history(x,y){
    var task = x +" = "+y
    console.log(task)
    arr.push(task);
    var list=document.getElementById('history');
    var li = document.createElement('li');
    li.className='a'
    li.id='li'
    arr.forEach(function(val,ind){
        li.innerHTML=val
        list.appendChild(li);
    })
}

function clearHist(){
    var task = document.getElementById('history');
    var li = document.getElementById('li')
    task.removeChild(li)
}