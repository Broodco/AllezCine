<template>
<div>
    <div id="bloc"><div class="tras"><img src="../../assets/iconfinder-icon.svg"height="20px" width="20px"></div></div>
    <div id="bloc1"><div class="tras1"><img src="../../assets/twitter.svg"height="20px" width="20px"></div></div>  
</div>
</template>

<script>
export default {

}
</script>

<style scoped>
#bloc{
    height: 20px;
    width:100px;
    
}

#bloc1{
    height: 20px;
    width:100px;
    
}

.tras{
    background-color:#355892;
    height: 20px;
    width: 59px;
    border-radius: 9px;
}

.tras1{
    background-color:#55aced;
    height: 20px;
    width: 59px;
    border-radius: 9px;
}


img{
    float:right;
}

.tras{
	position: absolute;
	left: -40px;
	transition: left 1s, transform 1s;
	white-space: nowrap;
}
.tras1{
	position: absolute;
	left: -40px;
	transition: left 1s, transform 1s;
	white-space: nowrap;
}
    #bloc:hover .tras{
	left: 5%;
	transform: translateX(-100%);
}
#bloc1:hover .tras1{
	left: 5%;
	transform: translateX(-100%);
}
</style>