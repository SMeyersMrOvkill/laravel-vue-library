<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <router-link class="navbar-brand" :to="{}">Library</router-link>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <router-link :to="{name: 'home'}" class="nav-link">Home</router-link>
            </li>
        </ul>
    </nav>
</template>