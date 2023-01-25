<template>
    <div>
        <h1>index</h1>
    </div>
</template> 

<script setup>
   const {data: email, id} = await useFetch('http://127.0.0.1:8000/api/show')
   console.log(email);
   
</script>