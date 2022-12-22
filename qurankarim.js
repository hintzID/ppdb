
$(document).ready(() => {
 
  const $showData = $('#show-data');
  const $showAyah = $('#show-ayah');
 
  const $raw = $('pre');
    // get json di endpoint
    $.getJSON('https://api.alquran.cloud/v1/surah', (respon) => {
      console.log(respon.code);
      console.log(respon.status);
      
      // mengatur ulang format respon dari json menjadi html
      const markup = respon.data
        .map(item => `
            <tr border="1">  
                <td class="surat" data-nomer="${item.number}" scope="row" id="no" style="text-align:center;">${item.number}.</td>
                <td class="surat" data-nomer="${item.number}" scope="row" id="surat" width="130">${item.name}</td>
                <td class="surat" data-nomer="${item.number}" scope="row" id="" width="250">${item.englishName} (${item.englishNameTranslation})</td>
                <td class="surat" data-nomer="${item.number}" scope="row" id=""><p style="color:red;">${item.numberOfAyahs} Ayat</p></td>
                <td class="surat" data-nomer="${item.number}" scope="row" id=""><p style="color:green;">${item.revelationType}</p></td>    
            </tr>`)
        .join('');
      const list = $('<table class="table" border="1"/>').html(markup);
      // tampilkan di kolom ke dua
      $showData.html(list);
     
      $('.surat').on('click', function (event) {
        var id = $(event.target).data("nomer");
        $.getJSON(`https://api.alquran.cloud/v1/surah/${id}?offset=0&limit=286`, function (respon2) {
            console.log(respon2);
            const markup = respon2.data.ayahs
              .map(item => `<table class="table" border="1">
              <tr border="1">
              <td style="text-align:center;" border="1" scope="row">
              <p>
              <b>
              <span style="color:brown; font-size:40px;">[${item.numberInSurah}]</span>
              </b>
              </p>
              <p style="font-family:'UthmanThaha';
              src:url('https://kangismet.github.io/fonts/Uthman-Thaha.eot');
              src:url('https://kangismet.github.io/fonts/Uthman-Thaha.eot?#iefix') format('embedded-opentype'),
              url('https://kangismet.github.io/fonts/Uthman-Thaha.ttf') format('truetype'); font-size: 50px">
              ${item.text}
              </p>
              <br><br>
              </td>
              </tr>
              </table>`)
              .join('');
     
            const list = $('<div  />').html(markup);
     
            // tampilkan di kolom ke dua
            $showAyah.html(list);
        });
      });

    });
   
 
});
