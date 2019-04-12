import axios from 'axios';

const url = 'http://localhost:8081'

export function like (comment_id) {
    let request = `${url}/likes.php?idCom=${comment_id}`
        return axios.get(request)
}
export function read (media_id) {
    let request = `${url}/read.php?idMovie=${media_id}`;
    return axios.get(request)
}
export function createCom (comment) {
    let request = `${url}/create.php`;
    console.log(request)
    return axios.post(request,JSON.stringify(comment))
}