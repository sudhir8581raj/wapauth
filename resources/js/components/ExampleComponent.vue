<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component {{ title }}</div>

                    <div class="card-body">
                        I'm an example component. {{ message}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data : {
            title : "hellow"
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
