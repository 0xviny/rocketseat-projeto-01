<div class="mx-auto max-w-7xl w-full px-6">
    <div class="text-center space-y-4 mb-16">
        <h2 class="text-xl text-blue-400 font-inconsolata tracking-wide">Meu trabalho</h2>
        <p class="text-4xl font-asap font-bold text-white tracking-wide">Veja os projetos em destaque</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <?php foreach ($projects as $project): ?>
            <div class="flex flex-col sm:flex-row bg-[#22242C] rounded-2xl p-6 gap-6 items-stretch ring-0 hover:ring-4 hover:ring-gray-400/50 transition-shadow duration-300 ease-in-out">

                <div class=" w-full sm:w-[40%] shrink-0">
                    <img src="<?= $project["image"] ?>" alt="<?= $project["name"] ?>" class="w-full h-full object-cover rounded-xl">
                </div>

                <div class="w-full sm:w-[60%] flex flex-col justify-between py-2">
                    <div class="space-y-3 mb-6">
                        <h3 class="text-2xl font-bold font-asap text-white"><?= $project["name"] ?></h3>
                        <p class="text-gray-400 font-maven-pro text-base leading-relaxed antialiased"><?= $project["description"] ?></p>
                    </div>

                    <div class="text-black text-xs font-bold flex flex-wrap gap-3 mt-auto">
                        <?php foreach ($project["stacks"] as $stack): ?>
                            <span class="bg-[<?= $stack["color"] ?>] py-1 px-4 rounded-full"><?= $stack["name"] ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>