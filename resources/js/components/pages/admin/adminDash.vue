<script setup>
import { ref, onMounted } from "vue";

const clock = {
    time: ref(""),
    date: ref(""),
};

const week = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];

const updateTime = () => {
    const cd = new Date();
    clock.time.value =
        zeroPadding(cd.getHours(), 2) +
        ":" +
        zeroPadding(cd.getMinutes(), 2) +
        ":" +
        zeroPadding(cd.getSeconds(), 2);
    clock.date.value =
        zeroPadding(cd.getFullYear(), 4) +
        "-" +
        zeroPadding(cd.getMonth() + 1, 2) +
        "-" +
        zeroPadding(cd.getDate(), 2) +
        " " +
        week[cd.getDay()];
};

const zeroPadding = (num, digit) => {
    let zero = "";
    for (let i = 0; i < digit; i++) {
        zero += "0";
    }
    return (zero + num).slice(-digit);
};

onMounted(() => {
    const timerID = setInterval(updateTime, 1000);
    updateTime();
});
</script>

<template>
    <main>
        <div class="flex flex-col items-center">
            <div
                id="clock"
                class="font-mono text-[rgb(9,43,52)] text-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
            >
                <p class="date text-lg" v-text="clock.date"></p>
                <p class="time text-6xl mt-4" v-text="clock.time"></p>
            </div>
        </div>
    </main>
</template>