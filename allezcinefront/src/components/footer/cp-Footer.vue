<template>
    <div class="footer">
        <div class="titre">
            <h1>ALLEZ<span class="color">CINE!</span></h1>
        </div>
        <div class="entité">
            <div class="groupe">
                <div class="soustitre">
                    <h2>LES FONDAMENTAUX</h2>
                </div>    
                <div class="groupefond">
                    <p>A propros de Allezciné</p>
                    <p>contactez-nous</p>
                    <p>Forum d'aide</p>
                </div>
            </div>
            <div class="groupe">
                <div class="soustitre">
                    <h2>COMMUNAUTE</h2>
                </div>   
                <div class="groupecomm">
                    <p>Règles</p>
                    <p>Classement</p>
                    <p>Forum</p>
                    <p>Twitter</p>
                    <p>Facebook</p>
                </div>
            </div>
            <div class="groupe">
                <div class="soustitre">
                    <h2>LEGAL</h2>
                </div>
                <div class="groupelegal">
                    <p>Conditions d'utilisation</p>
                    <p>Politique de confidencialité</p>
                </div>
            </div>
        </div>    
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.footer{
    display:flex;
    flex-direction: column;
    background-color: #181818;
    color:white;
    padding: 4em;

}
.titre{
        margin-bottom: 2em;
}

.entité{
    display:flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;
}
.groupe{
    display:flex;
    flex-direction: column;
    justify-content: flex-start;
}
.soustitre{
    display:flex;
    margin-bottom: 3em;
}
.color{
    color: red;
}
</style>