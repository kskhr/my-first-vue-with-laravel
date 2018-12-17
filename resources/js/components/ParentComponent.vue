<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">First Vue</div>

                    <div class="card-body">
                        <child-component v-model="date"></child-component>
                        <p>親: {{date}}</p>
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
                date: '2018-02-02',
            }
        },
    }
</script>
