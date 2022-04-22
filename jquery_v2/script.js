// $(selektor).akcja(funkcja-wykonana-przy-zdarzeniu)
// $('...').hide( ,"fast", "slow", 1000)



$(document).ready(function(){
    /* tu piszemy cały kod jQuery */

    // // chowa
    // $('#btn-hide').click(function(){
    //     console.log("kliknięto przycysk hide");
    //     $('#text').hide()
        
    // })

    // // pokazuje/przywraca 
    // $('#btn-show').click(function(){
    //     console.log("kliknięto przycysk show");
    //     $('#text').show("slow")
        
    
    // })
    // //zmiana z hide na show / show na hide
    // $('#btn-toggle').click(function(){
    //     console.log("kliknięto przycysk toggle");
    //     $('#text').toggle(1000)
    
    // })
    $('#text1').hide()
    $('#text2').hide()
    $('#text3').hide()

    $('#Hs').click(function(){
        console.log("kliknięto przycysk toggle");
        $('#text1').toggle(1000)
        
    })
    $('#Kl').click(function(){
        console.log("kliknięto przycysk toggle");
        $('#text2').toggle(1000)
    })
    $('#Pk').click(function(){
        console.log("kliknięto przycysk toggle");
        $('#text3').toggle(1000) 
    })

    



})