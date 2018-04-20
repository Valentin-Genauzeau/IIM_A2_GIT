import test from 'ava';
import req from 'requisition';

test("get All music", async () => {
    const res = await req('localhost:8888/api/musique.php');
    const body = await res.json();
    t.truthy(body, null);
    t.truthy(body, length, 0);
    const music = body[0];
    t.truthy(music, time);
    t.truthy(music, name);
    t.is(music, name, "Love Me Tender");
    t.is(music, time, 182);
})

test("get Location", (t) => {
    return getLocation().then((Location => {

        t.is(location.city, "Paris");
    }), catcher(err => {
        t.fail();
    })
})

let pika = "chu";

test.before("starter", () => {
    pika = "chu";
})

test("Hello World", (t) => {
    t.is(pika, "chu");
})

test("Je suis sure que Pika est chou", (t) => {
    t.is(pika, "chou");
})