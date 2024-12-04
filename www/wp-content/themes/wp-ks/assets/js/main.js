const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

window.addEventListener('DOMContentLoaded', function(){
    console.log('Javascript global')

    window.addEventListener('resize', function(){
        wrapperDistance()
    })

    wrapperDistance()
})

// coloca padding em elementos sem wrapper para alinhar a grid
function wrapperDistance(){
    let distance = $('.wrapper').offsetLeft

    $$('.wrapper-left').forEach(function(item){
        item.style.paddingLeft = `${distance}px`
    })
    $$('.wrapper-left').forEach(function(item){
        item.style.paddingRight = `${distance}px`
    })
}