$(".url").each(function( index ) {
  var url = $(this).val();
  renderPDF(url, document.getElementById('holder'));
});


var totalPage = '';
function renderPDF(url, canvasContainer, options) {
    var __CANVAS = $('#pdf-canvas').get(0);
    var options = options || { scale: 1 };
    // __PDF_DOC.numPages
    let array = [];
    function renderPage(page) {
        let scale_required = __CANVAS.width / page.getViewport(1).width;
        let viewport = page.getViewport(scale_required);
        let canvas = document.createElement('canvas');

        let context = canvas.getContext('2d');

        let renderContext = {
          canvasContext: context,
          viewport: viewport
        };
        
        canvas.height = viewport.height;
        canvas.width = viewport.width;

        canvasContainer.appendChild(canvas);
        page.render(renderContext);


        let numpage = page.pageIndex;
        array.push(numpage);
        let totalPage = array.length
        
        $("#holder").append("<div class='watermark'>ToNote-6f5423-fty334-345</div>");
        $("#holder").append("<div class='pageNum'>Page "+ (numpage + 1) +" </div> " );

    
       
    }
    
    // console.log(page.length);
    
    function renderPages(pdfDoc) {
        for(var num = 1; num <= pdfDoc.numPages; num++)
            pdfDoc.getPage(num).then(renderPage);

    }

    PDFJS.disableWorker = true;
    PDFJS.getDocument(url).then(renderPages);
    

}   