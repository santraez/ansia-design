function startApp(){openMenucoll()}document.addEventListener("DOMContentLoaded",(function(){startApp()}));const showAllButton=document.querySelector(".show-all-button"),select=document.querySelector(".item-select"),genesis=document.querySelector(".item-genesis"),orion=document.querySelector(".item-orion"),feline=document.querySelector(".item-feline"),barMenuUp=document.querySelector(".coll-menu-up"),barMenuDown=document.querySelector(".coll-menu-down"),iconDownS=document.getElementById("icon-down-s"),iconUpS=document.getElementById("icon-up-s"),iconDownG=document.getElementById("icon-down-g"),iconUpG=document.getElementById("icon-up-g"),iconDownO=document.getElementById("icon-down-o"),iconUpO=document.getElementById("icon-up-o"),iconDownF=document.getElementById("icon-down-f"),iconUpF=document.getElementById("icon-up-f");function openMenucoll(){showAllButton.addEventListener("click",showAll),select.addEventListener("click",showMenu),genesis.addEventListener("click",showGenesis),orion.addEventListener("click",showOrion),feline.addEventListener("click",showFeline)}function showAll(){select.classList.contains("display-none")&&(select.classList.remove("display-none"),select.classList.remove("collection-menu-active"),select.classList.add("collection-menu-default"),genesis.classList.add("display-none"),orion.classList.add("display-none"),feline.classList.add("display-none"),genesis.classList.remove("collection-menu-default"),orion.classList.remove("collection-menu-default"),feline.classList.remove("collection-menu-default"),barMenuUp.classList.add("display-none"),barMenuDown.classList.add("display-none"))}function showMenu(){genesis.classList.contains("display-none")&&orion.classList.contains("display-none")&&feline.classList.contains("display-none")?(select.classList.remove("collection-menu-default"),select.classList.add("collection-menu-active"),genesis.classList.remove("display-none"),orion.classList.remove("display-none"),feline.classList.remove("display-none"),barMenuDown.classList.remove("display-none"),iconUpS.classList.remove("display-none"),iconDownS.classList.add("display-none"),iconUpG.classList.add("display-none"),iconDownG.classList.add("display-none"),iconUpO.classList.add("display-none"),iconDownO.classList.add("display-none"),iconUpF.classList.add("display-none"),iconDownF.classList.add("display-none")):(select.classList.add("collection-menu-default"),select.classList.remove("collection-menu-active"),genesis.classList.add("display-none"),orion.classList.add("display-none"),feline.classList.add("display-none"),barMenuDown.classList.add("display-none"),iconUpS.classList.add("display-none"),iconDownS.classList.remove("display-none"))}function showGenesis(){select.classList.contains("display-none")&&orion.classList.contains("display-none")&&feline.classList.contains("display-none")?(genesis.classList.remove("collection-menu-default"),orion.classList.remove("display-none"),feline.classList.remove("display-none"),barMenuUp.classList.remove("display-none"),barMenuDown.classList.remove("display-none"),iconUpG.classList.remove("display-none"),iconDownG.classList.add("display-none"),iconUpO.classList.add("display-none"),iconDownO.classList.add("display-none"),iconUpF.classList.add("display-none"),iconDownF.classList.add("display-none")):(genesis.classList.add("collection-menu-default"),select.classList.add("display-none"),orion.classList.add("display-none"),feline.classList.add("display-none"),barMenuUp.classList.add("display-none"),barMenuDown.classList.add("display-none"),iconUpG.classList.add("display-none"),iconDownG.classList.remove("display-none"))}function showOrion(){select.classList.contains("display-none")&&genesis.classList.contains("display-none")&&feline.classList.contains("display-none")?(orion.classList.remove("collection-menu-default"),genesis.classList.remove("display-none"),feline.classList.remove("display-none"),barMenuUp.classList.remove("display-none"),barMenuDown.classList.remove("display-none"),iconUpO.classList.remove("display-none"),iconDownO.classList.add("display-none"),iconUpG.classList.add("display-none"),iconDownG.classList.add("display-none"),iconUpF.classList.add("display-none"),iconDownF.classList.add("display-none")):(orion.classList.add("collection-menu-default"),select.classList.add("display-none"),genesis.classList.add("display-none"),feline.classList.add("display-none"),barMenuUp.classList.add("display-none"),barMenuDown.classList.add("display-none"),iconUpO.classList.add("display-none"),iconDownO.classList.remove("display-none"))}function showFeline(){select.classList.contains("display-none")&&genesis.classList.contains("display-none")&&orion.classList.contains("display-none")?(feline.classList.remove("collection-menu-default"),genesis.classList.remove("display-none"),orion.classList.remove("display-none"),barMenuUp.classList.remove("display-none"),barMenuDown.classList.remove("display-none"),iconUpF.classList.remove("display-none"),iconDownF.classList.add("display-none"),iconUpG.classList.add("display-none"),iconDownG.classList.add("display-none"),iconUpO.classList.add("display-none"),iconDownO.classList.add("display-none")):(feline.classList.add("collection-menu-default"),select.classList.add("display-none"),genesis.classList.add("display-none"),orion.classList.add("display-none"),barMenuUp.classList.add("display-none"),barMenuDown.classList.add("display-none"),iconUpF.classList.add("display-none"),iconDownF.classList.remove("display-none"))}
//# sourceMappingURL=menu-colletion.js.map
