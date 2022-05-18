<script setup>
import Blog from '@/Pages/Blog.vue';
</script>

<template>
    <Blog>
        <iframe width="1"
                height="2" src="https://www.youtube.com/embed/udMZXITYLgw?autoplay=1" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                class="invisible"
                allowfullscreen>

        </iframe>
        <div class="h-full">
            <div class="mr-4 max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                    <div v-for="(card, index) in cards" :key="card.flipped" class="group relative ">
                        <!--                        <transition name="flip">-->
                        <div class="flex justify-center grid-cols-3">x
                            <vue-flip active-click="" width="300px" height="400px">
                                <template v-slot:front class="front w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1
                                                rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                    <img :src="'../storage/img/' + card.imgSrc" @click="toggleCard(card)"
                                         alt="product.imageAlt"
                                         class="mx-4 w-full h-full object-center object-cover lg:w-full lg:h-full"/>
                                    <span class="">click</span>
                                </template>
                                <template v-slot:back class="back w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1
                                                rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                    <img :src="'../storage/img/' + logo" @click="toggleCard(card)"
                                         alt="product.imageAlt"
                                         class="mx-4 w-full h-full object-center object-cover lg:w-full lg:h-full"/>
                                    <span class=""> click</span>
                                </template>
                            </vue-flip>

                        </div>
                        <!--                        </transition>-->
                    </div>
                </div>
            </div>
        </div>

    </Blog>
</template>

<script>
import Painterro from 'painterro';
import VueFlip from 'vue-flip';

export default {
    data() {
        return {
            painterro: null,
            logo:'logo.jpeg',
            cards: [
                {
                    front: 'The "First Computer Programmer"',
                    back: 'Ada Lovelace',
                    flipped: false,
                    imgSrc: 'img1.jpeg',
                    imgSrcBack: 'img3.jpeg'
                },
                {
                    front: 'Invented the "Clarke Calculator"',
                    back: 'Edith Clarke',
                    flipped: false,
                    imgSrc: 'img3.jpeg',
                    imgSrcBack: 'img2.jpeg'
                },
                {
                    front: 'Famous World War II Enigma code breaker',
                    back: 'Alan Turing',
                    flipped: false,
                    imgSrc: 'img2.jpeg',
                    imgSrcBack: 'img1.jpeg'
                },
                {
                    front: 'Famous World War II Enigma code breaker',
                    back: 'Alan Turing',
                    flipped: false,
                    imgSrc: 'img4.jpeg',
                    imgSrcBack: 'img1.jpeg'
                },
                {
                    front: 'Famous World War II Enigma code breaker',
                    back: 'Alan Turing',
                    flipped: false,
                    imgSrc: 'img5.jpeg',
                    imgSrcBack: 'img1.jpeg'
                },
                {
                    front: 'Famous World War II Enigma code breaker',
                    back: 'Alan Turing',
                    flipped: false,
                    imgSrc: 'img6.jpeg',
                    imgSrcBack: 'img1.jpeg'
                },
                {
                    front: 'Famous World War II Enigma code breaker',
                    back: 'Alan Turing',
                    flipped: false,
                    imgSrc: 'img7.jpeg',
                    imgSrcBack: 'img1.jpeg'
                },
            ],
            newFront: '',
            newBack: '',
            error: false
        }
    },
    methods: {
        toggleCard: function (card) {
            card.flipped = !card.flipped;
        },
        addNew: function () {
            if (!this.newFront || !this.newBack) {
                this.error = true;
            } else {
                this.cards.push({
                    front: this.newFront,
                    back: this.newBack,
                    flipped: false
                });
                // set the field empty
                this.newFront = '';
                this.newBack = '';
                // Make the warning go away
                this.error = false;
            }
        }
    },
    mounted() {
        this.$nextTick(() => {
            this.painterro = Painterro({
                id: 'painterro',
                colorScheme: {
                    main: '#f8f8f8',
                    control: '#d5d5d5',
                    controlContent: '#434649'
                },
                defaultTool: 'brush',
                hiddenTools: ['crop', 'line', 'arrow', 'rect', 'ellipse', 'text', 'rotate', 'resize', 'save', 'open', 'undo', 'redo', 'zoomin', 'zoomout', 'bucket'],
                backplateImgUrl: '../storage/img/img1.jpeg',
                saveHandler: (image, done) => {
                    const type = 'image/png';
                    const file = new File([image.asBlob(type)], "file.png", {
                        type: type,
                    });
                    this.add_file(file);
                    done(true); //done and hide painterro
                }
            }).show();
        });
    }
}

</script>

<style scoped>

.flip-enter-active {
    transition: all 0.4s ease;
}

.flip-leave-active {
    display: none;
}

.flip-enter, .flip-leave {
    transform: rotateY(180deg);
    opacity: 0;

}

#painterro {
    position: fixed;
    top: 65px;
    right: 20px;
    bottom: 20px;
    left: 20px;
    z-index: 1000;
    box-shadow: 0 0 20px 5px #505050;
}
</style>


