<template>    
    <panel-item :field="field">
        <template slot="value">        
            <iframe
                ref="player" 
                :src="videoUrl"                
                :height="height" 
                :width="width"
                frameborder="0" 
                webkitallowfullscreen 
                mozallowfullscreen 
                allowfullscreen
            >
            </iframe>
        </template>
    </panel-item>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],
        
        computed: {       
            videoUrl() {
                return this.field.value;
            },
            height() {                
                return this.field.options.height;
            },
            width() {
                return this.field.options.width;
            },       
        },
    }
</script>
