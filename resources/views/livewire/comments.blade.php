<div class="grid grid-cols-4 gap-4">
    <div class="col-span-4 text-center">
        <p class="text-xl font-bold">Comentarios</p>
    </div>
    <div class="col-span-4 mb-4">
        <div class="grid grid-cols-2 gap-2 my-2 border-b-neutral-300">
            <div class="">

            </div>
            <div class="">

            </div>
            <div class="col-span-2 ">

            </div>
        </div>
    </div>
    <div class="col-span-4">
        <form action="">
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Puntuación</label>
                    <select id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
                    <input type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required placeholder="Nombre Apellido">
                </div>
                <div class="col-span-2 ">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required placeholder="email@email.com">
                </div>
                <div class="col-span-2">
                    <label for="comment" class="block mb-2 text-sm font-medium text-gray-900">Comentario</label>
                    <textarea id="comment" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="mi comentario ..."></textarea>
                </div>
            </div>

        </form>
    </div>
</div>
