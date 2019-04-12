import axios from 'axios';

const url = 'http://localhost/AllezCine/allezcineback/'

export function like (comment_id) {
    let request = `${url}/likes.php?idCom=${comment_id}`
        return axios.get(request)
}
export function read (media_id) {
    let request = `${url}/read.php?idMovie=${media_id}`;
    return axios.get(request)
}
export function create (comment) {
    let request = `${url}/create.php`;
    return axios.post(request),JSON.stringify(comment)
}