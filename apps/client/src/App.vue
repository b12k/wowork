<script setup lang="ts">
import axios, { AxiosResponse } from 'axios';
import {onMounted, ref} from "vue";
import {
  TGetHealthRequest,
  TGetUserCollectionResponse,
  TGetUserCollectionRequest,
  TGetUserResponse,
  TUserEntity
} from '@wwrk/contracts';

const health = ref('')
const user = ref<TUserEntity | null>(null);
const users = ref<Array<TUserEntity>>([])


onMounted(async () => {
  const {
    data: healthRes,
  } = await axios.get<TGetHealthRequest>('http://localhost:8081/health');
  health.value = healthRes.status;

  const {
    data: userRes
  } = await axios.get<TGetUserResponse>('http://localhost:8081/api/users/12')
  user.value = userRes;

  const {
    data: usersRes,
  } = await axios.get<TGetUserCollectionResponse>('http://localhost:8081/api/users', {
    params: {
      take: 10,
      skip: 10,
    } as TGetUserCollectionRequest
  })

  users.value = usersRes.users;
})
</script>

<template>
  <main>
    <h1>Hello contracts</h1>
    <h2>Api health</h2>
    {{ health }}
    <h2>Users</h2>
    <ul>
      <li v-for="user in users">
        {{ user.fullName }}
      </li>
    </ul>
    <h2>
      User
    </h2>
    <div v-if="user">
      {{user.email}}
    </div>

  </main>
</template>
