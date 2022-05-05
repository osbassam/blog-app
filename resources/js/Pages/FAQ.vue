<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
const faqs = [
    {
        id: 1,
        question: "What is depression?",
        answer:
            "Everybody feels sad or blue now and then. But it may be depression if you’re sad most of the time and it’s giving you problems with your relationships, your grades or attendance at school, or controlling your behaviour in any other way. Depression can affect your thoughts, feelings, behaviour and overall health.\n",
    },
    {
        id: 2,
        question: "What are the risk factors/triggers for teen depression?",
        answer:
            "There is no single cause of depression. Stressful and discouraging situations naturally overwhelm and have the potential to become serious. Experiences of failure commonly result in temporary feelings of worthlessness and self-blame, while personal loss causes feelings of sadness, disappointment and emptiness.\n",
    },
    {
        id: 3,
        question: "How Can I Tell if My Child Is Depressed?",
        answer:
            "The symptoms of depression in children vary. The condition is often undiagnosed and untreated because symptoms are passed off as normal emotional and psychological changes. Early medical studies focused on \"masked\" depression, where a child's depressed mood was evidenced by acting out or angry behavior. While this does happen, particularly in younger children, many children display sadness or low mood similar to adults who are depressed. The primary symptoms of depression revolve around sadness, a feeling of hopelessness, and mood changes.",
    },
    {
        id: 4,
        question: "Can Depression in Children Be Prevented?",
        answer:
            "Children with a family history of depression are also at higher risk of depression. Children who have parents with depression tend to have their first episode of depression earlier than children whose parents don’t have the condition. Children from chaotic or conflicted families, or children and teens who abuse substances like alcohol and drugs, are also at greater risk of depression.",
    },
    {
        id: 5,
        question: "Does depression affect children?",
        answer:"Depression can affect people of any age, including children. Although children naturally have mood swings as they grow and develop, depression is different. The disorder can affect how children interact with friends and family. It may prevent them from enjoying school, sports, hobbies or other normal childhood activities.\n"
    },
    {
        id: 6,
        question: "How common is childhood depression and anxiety?",
        answer:
            "Depression and anxiety are among the most common mental health disorders in children. About 7% of children ages 3 to 17 have anxiety; about 3% deal with depression. Both depression and anxiety tend to be higher in older children and teenagers between the ages of 12 and 17. An estimated 3.2 million adolescents aged 12 to 17 had at least one major depressive episode. \n"
    },
    {
        id: 7,
        question: "How are childhood depression and anxiety diagnosed?",
        answer:
            "If you think your child is showing signs of depression or anxiety, talk to a healthcare provider. Start with your child’s pediatrician. Your pediatrician may refer you to a mental health professional for a more detailed evaluation.\n" +
            "A healthcare provider will likely start by ruling out conditions that may be causing your child’s mood issues. Illnesses known to cause symptoms of depression include: <br><br>\n" +
            "<br> <strong>Anemia.</strong>\n" +
            "<br> <strong>Concussion.</strong>\n" +
            "<br> <strong>Diabetes.</strong>\n" +
            "<br> <strong>Epilepsy.</strong>\n" +
            "<br> <strong>Hypothyroidism or hyperthyroidism.</strong>\n" +
            "<br> <strong>Mononucleosis.</strong>\n" +
            "<br> <strong>Vitamin D deficiency.</strong>\n"
    },
    {
        id: 8,
        question: " How are depression and anxiety in children treated?",
        answer:
            "Treatment options for children with depression are like those for adults. Your child’s healthcare provider may recommend: <br><br>\n" +
            "<br> <strong> Psychotherapy (counseling).</strong>\n" +
            "<br> <strong> Medication.</strong>\n" +
            "<br> <strong> Combination of the two.</strong>\n"
    },
    {
        id: 9,
        question: "How to find help for a child with depression?",
        answer:
            "Treating childhood depression starts with finding the right provider and the right type of treatment.\n" +
            "These steps can help.\n <br><br>" +
            "<br> <strong> 1. Talk with your child. While it may be difficult, try to have a conversation with your child about what they’re feeling and experiencing. Some children will open up. This will help you understand what’s happening.</strong>\n" +
            "<br> <strong> 2. Take notes. If your child will not talk with you, keep a diary of observable changes and signs. This can help a doctor see behavior trends</strong>.\n" +
            "<br> <strong> 3. Talk to the pediatrician. Your child’s doctor will first want to rule out physical issues that could account for the symptoms. This may require a series of blood tests and a physical exam.</strong>\n" +
            "<br> <strong> 4. Find a specialist. If your child’s pediatrician believes the issue is a mood disorder like depression, they may recommend you to a specialist, such as a psychologist or psychiatrist. These doctors are trained to recognize and treat childhood depression.</strong>"
    },
    // More questions...
]
</script>

<template>
    <BreezeAuthenticatedLayout>
        <div class="bg-gray-50">
            <div class="max-w-7xl mx-auto py-12 px-4 divide-y divide-gray-200 sm:px-6 lg:py-16 lg:px-8">
                <h2 class="text-3xl font-extrabold text-gray-900">Frequently asked questions</h2>
                <div class="mt-8">
                    <dl class="divide-y divide-gray-200">
                        <div v-for="faq in faqs" :key="faq.id" class="pt-6 pb-8 md:grid md:grid-cols-12 md:gap-8">
                            <dt class="text-base font-medium text-gray-900 md:col-span-5">
                                {{ faq.question }}
                            </dt>
                            <dd class="mt-2 md:mt-0 md:col-span-7">
                                <p class="text-base text-gray-500" v-html="faq.answer ">
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
