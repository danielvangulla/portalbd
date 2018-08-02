function printObject(o) {
  var out = '';
  for (var p in o) {
    out += p + ': ' + o[p] + '\n';
  }
  alert(out);
}


function diffDate(mulai,selesai) {
    xmYear=mulai.substr(0,4);
    xmMonth=mulai.substr(4,2);
    xmDay=mulai.substr(6,2);
    
    xsYear=selesai.substr(0,4);
    xsMonth=selesai.substr(4,2);
    xsDay=selesai.substr(6,2);
    
    xmulai = new Date(xmYear,xmMonth,xmDay);
    xselesai = new Date(xsYear,xsMonth,xsDay);
    xh = xselesai - xmulai;
    xhasil = xh / (1000*60*60*24);
    
    return xhasil;
}


function formatUang(num) {
    var p = num.toFixed(2).split(".");
    return "" + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num + (i && !(i % 3) ? "," : "") + acc;
    }, "") + "." + p[1];
}