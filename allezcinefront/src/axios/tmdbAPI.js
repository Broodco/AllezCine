import axios from 'axios';

const url = 'https://api.themoviedb.org/3';
const api_key = 'api_key=833ff06d69182d00cff97e3090365785';
const sort = 'sort_by=popularity.desc';

export function discover (media,page) { 
    return axios.get(`${url}/discover/${media}?${api_key}&language=en-US&${sort}&include_adult=false&include_video=false&page=${page}`)
}
export function query (query) {
    return axios.get(`${url}/search/multi?${sort}&query=${query}&${api_key}`)
}
export function details (media,id) {
    return axios.get(`${url}/${media}/${id}?${api_key}`)
}