var itemNumber=0;
var totalNumber=0;
var price=0;
var pass=0;
var item;
function addToCart(item,cost){
    itemNumber+=1;
    var container=document.createElement('div');
    container.setAttribute('id','container');
    var selectedItem=document.createElement('div');
    selectedItem.setAttribute('id',itemNumber);
    var cartItem=document.getElementById('cart');
    cartItem.appendChild(selectedItem);
    var title=document.createElement('div');
    title.setAttribute('id','name');
    title.innerText= item.children[0].innerText.substring(10,);
    var lable1=document.createElement('div');
    lable1.setAttribute('id','module');
    lable1.innerText= item.children[0].innerText.substring(0,8);
    selectedItem.append(title);
    container.append(lable1);
    var lable2=document.createElement('div');
    lable2.setAttribute('id','module');
    lable2.innerText=cost.children[0].innerText;
    container.append(lable2);
    var delbtn=document.createElement('button');
    delbtn.innerText="Remove";
    delbtn.setAttribute('id','remove');
    delbtn.setAttribute('onclick','del('+itemNumber+',container)');
    container.append(delbtn);
    selectedItem.append(container);
    var lnk=document.createElement('div');
    lnk.setAttribute('id','lnk');
    lnk.innerText=cost.children[1].href;
    lnk.innerText=lnk.innerText.split('s.pdf')[0]+'.pdf';
    selectedItem.append(lnk);
    price= parseFloat(container.children[1].innerText.replace('/-',''));
    total(price);
    console.log(cart)
}

function del(item,cont){
    totalNumber-=parseFloat(document.getElementById(item).children[1].children[1].innerText.replace('/-',''));
    sum.children[0].innerText='Total: '+totalNumber+'/-';
    document.getElementById(item).remove();
    itemNumber-=1;
}
function total(price){
    totalNumber+=price;
    sum.children[0].innerText='Total: '+totalNumber+'/-';
}

function sendTotalPricePhy() {
    var number=1;
    while(number!=0){
        var PDFName=document.getElementById(number).children[0].innerText;
        var Mod=document.getElementById(number).children[1].children[0].innerText;
        var Amt=document.getElementById(number).children[1].children[1].innerText;
        var Lnk=document.getElementById(number).children[2].innerText;
        console.log(document.getElementById(number).children[2].innerText)
        $.ajax({
            url: 'phy.php', // The PHP script that will handle the data
            type: 'POST',
            data: { PDF_Name: PDFName,Module:Mod,Amount:Amt,Link:Lnk},
        });
        number+=1;
        if(!document.getElementById(number)){
            number=0;
        }
    }
    
}
function sendTotalPriceChem() {
    var number=1;
    while(number!=0){
        var PDFName=document.getElementById(number).children[0].innerText;
        var Mod=document.getElementById(number).children[1].children[0].innerText;
        var Amt=document.getElementById(number).children[1].children[1].innerText;
        var Lnk=document.getElementById(number).children[2].innerText;
        $.ajax({
            url: 'chem.php', // The PHP script that will handle the data
            type: 'POST',
            data: { PDF_Name: PDFName,Module:Mod,Amount:Amt,Link:Lnk },
        });
        number+=1;
        if(!document.getElementById(number)){
            number=0;
        }
    }
    
}






