<script setup>
import { ref } from "vue";

// Function to generate a random layout
function generateRandomLayout() {
    const layouts = [
        ["image", "description", "image", "image"],
        ["image", "image", "description", "image"],
        ["description", "image", "image", "image"],
        ["image", "image", "image", "description"],
    ];
    return layouts[Math.floor(Math.random() * layouts.length)];
}

function generateRandomAlignment() {
    const alignments = ["text-left", "text-center", "text-right"];
    return alignments[Math.floor(Math.random() * alignments.length)];
}

// Define your projects array with randomized layouts
const projects = ref([
    {
        title: "Project 1",
        description: `A user-friendly platform designed to streamline
                    event planning and ticketing management
                    offering a varieties of tools to meet the needs
                    of event organizers, attendees, and
                    stakeholders, ensuring a smooth and efficient
                    experience from start to finish.`,
        images: [
            "/images/picca1.png",
            "/images/picca2.png",
            "/images/picca3.png",
        ],
        layout: generateRandomLayout(),
        alignment: generateRandomAlignment(),
    },
    {
        title: "Project 2",
        description: `A platform exclusively designed for writers,
                    connecting talented writer with clients
                    seeking high-quality written content. This
                    platform aims to empower writers by giving
                    them a dedicated space to find opportunities,
                    build their careers, and connect with clients
                    who value their craft.`,
        images: ["/images/wg1.png", "/images/wg2.png", "/images/wg3.png"],
        layout: generateRandomLayout(),
        alignment: generateRandomAlignment(),
    },
    {
        title: "Project 3",
        description: `An internal application
                    designed for a pharmaceutical
                    company to manage inventory
                    management and facilitate
                    communication across the
                    organization.`,
        images: ["/images/gs1.png", "/images/gs2.png", "/images/gs3.png"],
        layout: generateRandomLayout(),
        alignment: generateRandomAlignment(),
    },
    {
        title: "Project 4",
        description: `A package delivery App for facilitating a seamless
                    sending, tracking, and receiving of parcels serving as
                    a solution for logistics and courier companies, as well
                    as individual users who need delivery services.`,
        images: ["/images/fx1.png", "/images/fx2.png", "/images/fx3.png"],
        layout: generateRandomLayout(),
        alignment: generateRandomAlignment(),
    },
    {
        title: "Project 5",
        description: `A specialized Application/software solution used
                        internally to verify and authenticate customer
                        data to ensure accuracy and legitimacy. `,
        images: ["/images/vc1.png", "/images/vc2.png", "/images/vc3.png"],
        layout: generateRandomLayout(),
        alignment: generateRandomAlignment(),
    },
    {
        title: "Project 6",
        description: `An AI powered e-learning tool for schools
                    developed to improve the learning experience
                    by leveraging artificial intelligence to personalize
                    education, improve student engagement, and
                    provide educators with valuable insights. `,
        images: [
            "/images/cindy1.png",
            "/images/cindy2.png",
            "/images/cindy3.png",
        ],
        layout: generateRandomLayout(),
        alignment: generateRandomAlignment(),
    },
    {
        title: "Project 7",
        description: `A cloud based SaaS/CRM tool for managing leads
                    and improve relationships with customers and
                    clients; providing businesses with a centralize
                    customer data to streamline interactions, and boost
                    communication between the company and the
                    customers. Also used within an organization for
                    stock, project management`,
        images: ["/images/padi.png", "/images/padi2.png", "/images/padi3.png"],
        layout: generateRandomLayout(),
        alignment: generateRandomAlignment(),
    },
    {
        title: "Project 8",
        description: `A platform for email marketing
                        that helps businesses create,
                        manage, and optimize email
                        communication as well as
                        improve customer relationships,
                        promote their products, and
                        drive engagement.`,
        images: ["/images/crab1.png", "/images/crab2.png", "/images/crab3.png"],
        layout: generateRandomLayout(),
        alignment: generateRandomAlignment(),
    },
]);
</script>

<template>
    <div class="space-y-8 p-4">
        <!-- Loop through projects -->
        <div
            v-for="(project, index) in projects"
            :key="index"
            :class="[
                'grid gap-4 p-4',
                index % 2 === 1 ? 'bg-black text-white' : 'bg-white text-black',
                'grid-cols-1 md:grid-cols-2', // Responsive grid
            ]"
        >
            <!-- Project title -->
            <h2
                class="col-span-1 md:col-span-2 text-2xl md:text-4xl font-bold"
                :class="[
                    project.alignment,
                    index % 2 === 1 ? 'text-yellow-600' : 'text-black',
                ]"
            >
                {{ project.title }}
            </h2>

            <!-- First Cell -->
            <div v-if="project.layout[0]" class="p-4">
                <img
                    :src="project.images[0]"
                    v-if="project.layout[0] === 'image'"
                    alt="Project Image"
                    class="w-full h-auto object-cover rounded-lg"
                />
                <div
                    v-else-if="project.layout[0] === 'description'"
                    class="flex flex-col justify-center"
                >
                    <p class="text-lg md:text-2xl">{{ project.description }}</p>
                </div>
            </div>

            <!-- Second Cell -->
            <div v-if="project.layout[1]" class="p-4">
                <img
                    :src="project.images[1]"
                    v-if="project.layout[1] === 'image'"
                    alt="Project Image"
                    class="w-full h-auto object-cover rounded-lg"
                />
                <div
                    v-else-if="project.layout[1] === 'description'"
                    class="flex flex-col justify-center"
                >
                    <p class="text-lg md:text-2xl">{{ project.description }}</p>
                </div>
            </div>

            <!-- Third Cell -->
            <div v-if="project.layout[2]" class="p-4">
                <img
                    :src="project.images[2]"
                    v-if="project.layout[2] === 'image'"
                    alt="Project Image"
                    class="w-full h-auto object-cover rounded-lg"
                />
                <div
                    v-else-if="project.layout[2] === 'description'"
                    class="flex flex-col justify-center"
                >
                    <p class="text-lg md:text-2xl">{{ project.description }}</p>
                </div>
            </div>

            <!-- Fourth Cell -->
            <div v-if="project.layout[3]" class="p-4">
                <img
                    :src="project.images[2]"
                    v-if="project.layout[3] === 'image'"
                    alt="Project Image"
                    class="w-full h-auto object-cover rounded-lg"
                />
                <div
                    v-else-if="project.layout[3] === 'description'"
                    class="flex flex-col justify-center"
                >
                    <p class="text-lg md:text-2xl">{{ project.description }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

