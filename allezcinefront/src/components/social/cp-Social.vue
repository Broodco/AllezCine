<template>
    <div>
        <div id="bloc">
            <div class="tras">
                <a href="http://www.facebook.com">
                    <img src="../../assets/iconfinder-icon.svg"height="40px" width="40px">
                </a>
            </div>
        </div>
        <div id="bloc1">
            <div class="tras1">
                <a href="http://www.twitter.com">
                    <img src="../../assets/twitter.svg"height="40px" width="40px">
                </a>
            </div>
        </div>  
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
#bloc{
    height: 46px;
    width:100px;
    
}

#bloc1{
    height: 40px;
    width:100px;
    
}

.tras{
    background-color:#355892;
    height: 40px;
    width: 240px;
    border-radius: 17px;
}

.tras1{
    background-color:#55aced;
    height: 40px;
    width: 240px;
    border-radius: 17px;
}


img{
    float:right;
}

.tras{
	transition: left 1s, transform 1s;
	white-space: nowrap;
}
.tras1{
	transition: left 1s, transform 1s;
	white-space: nowrap;
}
#bloc:hover .tras{
	transform: translateX(30%);
}
#bloc1:hover .tras1{
	transform: translateX(30%);
}
</style>