<template>
    <div class="movies-list">
        <ul>
            <li>
                <div class="movie-card" id="movie-count">
                    <div class="card mb-12">
                        <p>Count: <span>{{ movies_count }}</span></p>
                    </div>
                </div>
            </li>


            <li v-for="movie in movies" :key="movie.id">
                <div class="movie-card">
                    <template v-if="selected_movie_id && selected_movie_id == movie.id">
                        <div class="selected_movie_card">
                            <Movie @childMovieSelected="selectMovie" :movie="movie" />
                        </div>
                    </template>
                    <template v-else>
                        <div>
                            <Movie @childMovieSelected="selectMovie" :movie="movie" />
                        </div>
                    </template>
                </div>
            </li>

            <li>
                <div class="movie-card" id="movie-count">
                    <div class="card mb-12">
                        <p>total: <span>{{ movies_total }}</span></p>
                    </div>
                </div>
            </li>



        </ul>
    </div>
</template>



<script>
import Movie from '../components/MovieComponent.vue';

export default {
    components: {
        Movie
    },

    name: 'Movies',
    props: ['movies', 'selected_movie_id', 'movies_count', 'movies_total'],
    methods: {
        selectMovie(movie) {
            this.$emit('movieSelected', movie);
        },
    },
};
</script>
