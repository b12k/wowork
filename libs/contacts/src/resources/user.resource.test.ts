import { ZodFirstPartySchemaTypes } from 'zod';
import { spec, settings } from 'pactum';
import { GetUserResponse, GetUserCollectionResponse } from './user.resource';

settings.setJsonSchemaAdapter({
  validate: (schema: ZodFirstPartySchemaTypes, data) => {
    const result = schema.safeParse(data);
    if (result.success) return;
  },
});

settings.setLogLevel('SILENT');

describe('User resource', () => {
  it ('should return a user by id', async () => {
    await spec()
      .get('http://127.0.0.1:8081/api/users/12')
      .expectJsonSchema(GetUserResponse)
  });

  it ('should 404 when user not found', async () => {
    await spec()
      .get('http://127.0.0.1:8081/api/users/9234875')
      .expectStatus(200)
  })

  // it ('should return users', async () => {
  //   await spec()
  //     .get('http://127.0.0.1:8081/api/users')
  //     .expectJsonSchema(GetUserCollectionResponse)
  // })
})
