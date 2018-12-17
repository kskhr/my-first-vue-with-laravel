<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">First Vue</div>

                    <div class="card-body">
                        <child-component 
                            v-bind:name.sync="name"
                            v-bind:hp.sync="hp"></child-component>
                        <p>親: name: {{name}} hp: {{hp}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ChildComponent from './ChildComponent';
    export default {
        components: {
            ChildComponent,
        },
        data() {
            return {
                name: 'スライム',
                hp: 100,
            }
        },
    }
</script>
