
function showPreview(imagePath,imageIndex){
    var subImages = document.getElementById('previewPane').getElementsByTagName('IMG');
    var anchImg = document.getElementById('previewImage');
    if(subImages.length==0){
        var img = document.createElement('IMG');
        //var a = document.createElement('A');
        //document.getElementById('previewPane').appendChild(a);
        document.getElementById('previewPane').appendChild(img);
    }else img = subImages[0];
    
    if(displayWaitMessage){
        document.getElementById('waitMessage').style.display='inline';
    }
            img.onload = function() { hideWaitMessageAndShowCaption(imageIndex-1); };		
    //a.href = imagePath;
    //a.rel = "shadowbox";
    img.src = imagePath;
    //initImage();
}

function hideWaitMessageAndShowCaption(imageIndex)
{
    document.getElementById('waitMessage').style.display='none';	
        }
window.onload = initSlideShow;
